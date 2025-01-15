<?php

namespace Database\Seeders;

use App\Models\CatBrand;
use App\Models\CatBrandDet;
use Illuminate\Database\Seeder;

class LesseeBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$cat_brand = [
			['description' => 'El Palacio de Hierro'],
			['description' => 'Liverpool'],
			['description' => 'Vincent'],
			['description' => 'Fargo '],
			['description' => 'La Pasteria'],
			['description' => 'Chilis'],
			['description' => 'Sushi Factory'],
			['description' => 'Starbucks Reserve'],
			['description' => '.'],
			['description' => 'La Moresca'],
			['description' => 'El Almacen del Bife'],
			['description' => 'Corazon de alcochofa'],
			['description' => 'LOLo Cocina y Vino'],
			['description' => 'La Docena Oyster Bar and Grill'],
			['description' => 'Juniko'],
			['description' => 'Desigual'],
			['description' => 'Emwa'],
			['description' => 'Macame'],
			['description' => 'LOccitane'],
			['description' => 'Dione'],
			['description' => 'Zingara'],
			['description' => 'Scappino'],
			['description' => 'Rapsodia'],
			['description' => 'H&M_1'],
			['description' => 'Aldo'],
			['description' => 'Levis'],
			['description' => 'Brantano'],
			['description' => 'Carter´s'],
			['description' => 'Cloe'],
			['description' => 'The Body Shop'],
			['description' => 'Massmarcas'],
			['description' => 'High Life'],
			['description' => 'Adolfo Dominguez'],
			['description' => 'Gran Via'],
			['description' => 'Arnoldi'],
			['description' => 'Camper'],
			['description' => 'Skechers'],
			['description' => 'Kipling'],
			['description' => 'opticas Kauffman'],
			['description' => 'Lacoste'],
			['description' => 'Puma'],
			['description' => 'HSBC'],
			['description' => 'BBVA Bancomer'],
			['description' => 'Banorte'],
			['description' => 'CI Banco'],
			['description' => 'New Balance'],
			['description' => 'The North Face'],
			['description' => 'Bimba y Lola'],
			['description' => 'Zara'],
			['description' => 'Pull & Bear'],
			['description' => 'Massimo Dutti'],
			['description' => 'Oysho'],
			['description' => 'Bershka'],
			['description' => 'Zara Home'],
			['description' => 'Massimo Dutti_vacio'],
			['description' => 'Adidas Originals'],
			['description' => 'Sfera'],
			['description' => 'Guess'],
			['description' => 'Le Labo'],
			['description' => 'Samsung Store'],
			['description' => 'MAC'],
			['description' => 'Kiehls'],
			['description' => 'Kaana Swimwear'],
			['description' => 'Shifra Spa & Medical Center'],
			['description' => 'Misen & Co'],
			['description' => 'Mango'],
			['description' => 'Macstore'],
			['description' => 'Nike'],
			['description' => 'FullSand'],
			['description' => 'Galitt'],
			['description' => 'Santa Maria'],
			['description' => 'Aerie'],
			['description' => 'Hollister'],
			['description' => 'Adidas'],
			['description' => 'H&M_2'],
			['description' => 'Melissa'],
			['description' => 'Toh haa Chocolate'],
			['description' => 'Coqueta y Audaz'],
			['description' => 'Flexi'],
			['description' => 'Quiksilver'],
			['description' => 'Tous'],
			['description' => 'Cuadra'],
			['description' => 'Birkenstock'],
			['description' => 'Outback'],
			['description' => 'GAP'],
			['description' => 'Pandora'],
			['description' => 'Forever 21'],
			['description' => 'Studio F'],
			['description' => 'Calvin Klein'],
			['description' => 'Dockers'],
			['description' => 'Tempur'],
			['description' => 'TAF'],
			['description' => 'Bath & Body Works'],
			['description' => 'Tommy Hilfiger'],
			['description' => 'United Colors Of Benetton'],
			['description' => 'Brooks Brothers'],
			['description' => 'Sephora'],
			['description' => 'Victorias Secret Full Assortment'],
			['description' => 'Sunglass Hut'],
			['description' => 'Opticas Devlyn'],
			['description' => 'Oro Gold'],
			['description' => 'GNC'],
			['description' => 'Lush'],
			['description' => 'TAF'],
			['description' => 'Timberland'],
			['description' => 'Technomarine'],
			['description' => 'Chicco'],
			['description' => 'Onix '],
			['description' => 'Juguetron'],
			['description' => 'Gonvill'],
			['description' => 'Sevilla Sol Viajes'],
			['description' => 'Game Planet'],
			['description' => 'Fina Estampa'],
			['description' => 'Social Pijamas'],
			['description' => 'Converse'],
			['description' => 'Mobo Shop'],
			['description' => 'Steren'],
			['description' => 'Lego'],
			['description' => 'Huaweii Store'],
			['description' => 'AT&T'],
			['description' => 'Telcel '],
			['description' => 'Kinal Spa'],
			['description' => 'Cuerno '],
			['description' => 'HSBC PREMIER'],
			['description' => 'Natuzzi Italia'],
			['description' => 'Patrice Salon & Barber Shop'],
			['description' => 'Actinver'],
			['description' => 'MAIN Beauty Salon'],
			['description' => 'Aeromexico'],
			['description' => 'Case'],
			['description' => 'True Religion'],
			['description' => 'Replay'],
			['description' => 'BCBGMAXAZRIA'],
			['description' => 'Luxeon'],
			['description' => 'La Casa Del Habano Guadalajara'],
			['description' => 'IlDiavolo'],
			['description' => 'Macame'],
			['description' => 'Nespresso'],
			['description' => 'Hackett'],
			['description' => 'Pal Zileri'],
			['description' => 'Lust'],
			['description' => 'Steve Madden'],
			['description' => 'Louder'],
			['description' => 'Pronovias'],
			['description' => 'Ben & Frank '],
			['description' => 'Talento'],
			['description' => 'La Mar'],
			['description' => 'Michael Kors'],
			['description' => 'Coach'],
			['description' => 'Hugo Boss'],
			['description' => 'opticas LUX'],
			['description' => 'Innovasport'],
			['description' => 'PF Changs'],
			['description' => 'El Asador la Vaca Argentina'],
			['description' => 'La Ciudad de Colima'],
			['description' => 'MARISA/DOLCE NATURA'],
			['description' => 'Carls Jr.'],
			['description' => 'Tacos Paza'],
			['description' => 'Fresh Salads'],
			['description' => 'KFC'],
			['description' => 'Arbys'],
			['description' => 'Yamile Gyros & Comida Arabe'],
			['description' => 'Argentina Express'],
			['description' => 'Jersey Mikes'],
			['description' => 'Popeyes Lousiana Kitchen'],
			['description' => 'La flor de cordoba'],
			['description' => ' Sun Fa'],
			['description' => 'Subway'],
			['description' => 'Pollo Pepe'],
			['description' => 'Qin'],
			['description' => 'The Sushi & Salads, Co.'],
			['description' => 'Burger King'],
			['description' => 'UP & JOY'],
			['description' => 'Play City'],
			['description' => 'Enigma Room '],
			['description' => 'Cinepolis'],
		];

		foreach ($cat_brand as $key => $cat_b) {
			$brand = CatBrand::create($cat_b);

			CatBrandDet::create([
				'cat_user_type_id' => 4,
				'cat_brand_id' => $brand->id
			]);
		}
    }
}
