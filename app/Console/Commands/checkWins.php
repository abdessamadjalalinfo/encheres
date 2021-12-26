<?php

namespace App\Console\Commands;

use App\Models\Newsletter;
use Illuminate\Console\Command;
use Carbon\Carbon;

use App\Models\Product;
use App\Models\Categorie;
use App\Models\Favorit;
use App\Models\Enchere;
use App\Models\Win;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class checkWins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $encheres_products = DB::table('encheres')->distinct()->get('produit_id');
        foreach ($encheres_products as $productId) {
            $produit_id = ($productId->produit_id);
            $produit = Product::find($produit_id);
            $dernier_enchere = Enchere::all()->where('produit_id', $produit_id)->SortBy('price')->last();
            $date_expires = Carbon::parse($dernier_enchere->created_at)->addHours($produit->duree);
            $date_now = Carbon::now();
            if ($date_expires < $date_now) {
                if ($produit->etat != "expiré") {
                    $wins = new Win();
                    $wins->enchere_id = $dernier_enchere->id;
                    $wins->user_id = $dernier_enchere->user_id;
                    $wins->save();
                    $produit->etat = "expiré";
                    $produit->save();
                }
            }
        }
    }
}
