<?php

namespace Database\Seeders;

use App\Models\MailAddress;
use App\Models\SegLogin;
use App\Models\SegSubSeccion;
use App\Models\SegUsuario;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LesseeUsersMarketingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [
			['usuario' => 'Claudia.Elizondo','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Elizondo','apema' => '','isadm' => false],
			['usuario' => 'Beatriz.Hernandez','pwd' => bcrypt('123345'),'nombre' => 'Beatriz','apepa' => 'Hernandez','apema' => '','isadm' => false],
			['usuario' => 'Leopoldo.Rubio','pwd' => bcrypt('123345'),'nombre' => 'Leopoldo','apepa' => 'Rubio','apema' => '','isadm' => false],
			['usuario' => 'Maria.Laura','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Laura','apema' => '','isadm' => false],
			['usuario' => 'Francisco.Ramirez','pwd' => bcrypt('123345'),'nombre' => 'Francisco','apepa' => 'Ramirez','apema' => '','isadm' => false],
			['usuario' => 'Angela.Lozano','pwd' => bcrypt('123345'),'nombre' => 'Angela','apepa' => 'Lozano','apema' => '','isadm' => false],
			['usuario' => 'Jhabiv.Leon','pwd' => bcrypt('123345'),'nombre' => 'Jhabiv','apepa' => 'Leon','apema' => '','isadm' => false],
			['usuario' => 'Maria.Jose','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Jose','apema' => '','isadm' => false],
			['usuario' => 'Michele.Durzo','pwd' => bcrypt('123345'),'nombre' => 'Michele','apepa' => 'Durzo','apema' => '','isadm' => false],
			['usuario' => 'Blanca.Gomez','pwd' => bcrypt('123345'),'nombre' => 'Blanca','apepa' => 'Gomez','apema' => '','isadm' => false],
			['usuario' => 'Hugo.Bautis','pwd' => bcrypt('123345'),'nombre' => 'Hugo','apepa' => 'Bautis','apema' => '','isadm' => false],
			['usuario' => 'Felix.Domingu','pwd' => bcrypt('123345'),'nombre' => 'Felix','apepa' => 'Domingu','apema' => '','isadm' => false],
			['usuario' => 'Alejandro.Gonzalez','pwd' => bcrypt('123345'),'nombre' => 'Alejandro','apepa' => 'Gonzalez','apema' => '','isadm' => false],
			['usuario' => 'Polo.Lara','pwd' => bcrypt('123345'),'nombre' => 'Polo','apepa' => 'Lara','apema' => '','isadm' => false],
			['usuario' => 'Saira.Alcala','pwd' => bcrypt('123345'),'nombre' => 'Saira','apepa' => 'Alcala','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Dalel.Menduet','pwd' => bcrypt('123345'),'nombre' => 'Dalel','apepa' => 'Menduet','apema' => '','isadm' => false],
			['usuario' => 'Cecilia.Leyva','pwd' => bcrypt('123345'),'nombre' => 'Cecilia','apepa' => 'Leyva','apema' => '','isadm' => false],
			['usuario' => 'Michelle.Lomeli','pwd' => bcrypt('123345'),'nombre' => 'Michelle','apepa' => 'Lomeli','apema' => '','isadm' => false],
			['usuario' => 'Julian.Cuevas','pwd' => bcrypt('123345'),'nombre' => 'Julian','apepa' => 'Cuevas','apema' => '','isadm' => false],
			['usuario' => 'Maru.Romero','pwd' => bcrypt('123345'),'nombre' => 'Maru','apepa' => 'Romero','apema' => '','isadm' => false],
			['usuario' => 'Luis.Antoni','pwd' => bcrypt('123345'),'nombre' => 'Luis','apepa' => 'Antoni','apema' => '','isadm' => false],
			['usuario' => 'Giusepp.Bortolucc','pwd' => bcrypt('123345'),'nombre' => 'Giusepp','apepa' => 'Bortolucc','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Eila.Trujil','pwd' => bcrypt('123345'),'nombre' => 'Eila','apepa' => 'Trujil','apema' => '','isadm' => false],
			['usuario' => 'Liliana.Lozano','pwd' => bcrypt('123345'),'nombre' => 'Liliana','apepa' => 'Lozano','apema' => '','isadm' => false],
			['usuario' => 'Maria.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'Alejandro.Herrera','pwd' => bcrypt('123345'),'nombre' => 'Alejandro','apepa' => 'Herrera','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Ana.Paula','pwd' => bcrypt('123345'),'nombre' => 'Ana','apepa' => 'Paula','apema' => '','isadm' => false],
			['usuario' => 'Danae.Chavez','pwd' => bcrypt('123345'),'nombre' => 'Danae','apepa' => 'Chavez','apema' => '','isadm' => false],
			['usuario' => 'Barbara.Pulido','pwd' => bcrypt('123345'),'nombre' => 'Barbara','apepa' => 'Pulido','apema' => '','isadm' => false],
			['usuario' => 'Jose.Luis','pwd' => bcrypt('123345'),'nombre' => 'Jose','apepa' => 'Luis','apema' => '','isadm' => false],
			['usuario' => 'Rosario.Becerra','pwd' => bcrypt('123345'),'nombre' => 'Rosario','apepa' => 'Becerra','apema' => '','isadm' => false],
			['usuario' => 'Viviana.Cortes','pwd' => bcrypt('123345'),'nombre' => 'Viviana','apepa' => 'Cortes','apema' => '','isadm' => false],
			['usuario' => 'Teresa.de','pwd' => bcrypt('123345'),'nombre' => 'Teresa','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Eulalia.Canudas','pwd' => bcrypt('123345'),'nombre' => 'Eulalia','apepa' => 'Canudas','apema' => '','isadm' => false],
			['usuario' => 'Laura.Estela','pwd' => bcrypt('123345'),'nombre' => 'Laura','apepa' => 'Estela','apema' => '','isadm' => false],
			['usuario' => 'Fernanda.Uriarte','pwd' => bcrypt('123345'),'nombre' => 'Fernanda','apepa' => 'Uriarte','apema' => '','isadm' => false],
			['usuario' => 'Virginie.Dubray','pwd' => bcrypt('123345'),'nombre' => 'Virginie','apepa' => 'Dubray','apema' => '','isadm' => false],
			['usuario' => 'Emmanuel.Aguilar','pwd' => bcrypt('123345'),'nombre' => 'Emmanuel','apepa' => 'Aguilar','apema' => '','isadm' => false],
			['usuario' => 'Sergio.de','pwd' => bcrypt('123345'),'nombre' => 'Sergio','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Norberto.de','pwd' => bcrypt('123345'),'nombre' => 'Norberto','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Raymundo.Rodriguez','pwd' => bcrypt('123345'),'nombre' => 'Raymundo','apepa' => 'Rodriguez','apema' => '','isadm' => false],
			['usuario' => 'Rafael.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Rafael','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'Carolina.Moran','pwd' => bcrypt('123345'),'nombre' => 'Carolina','apepa' => 'Moran','apema' => '','isadm' => false],
			['usuario' => 'Cristina.Barrileiro','pwd' => bcrypt('123345'),'nombre' => 'Cristina','apepa' => 'Barrileiro','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Ileana.Terreros','pwd' => bcrypt('123345'),'nombre' => 'Ileana','apepa' => 'Terreros','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Lizbeth.Luis','pwd' => bcrypt('123345'),'nombre' => 'Lizbeth','apepa' => 'Luis','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Viviana.Cortez','pwd' => bcrypt('123345'),'nombre' => 'Viviana','apepa' => 'Cortez','apema' => '','isadm' => false],
			['usuario' => 'Andrea.Castro','pwd' => bcrypt('123345'),'nombre' => 'Andrea','apepa' => 'Castro','apema' => '','isadm' => false],
			['usuario' => 'Jessica.Nayeli','pwd' => bcrypt('123345'),'nombre' => 'Jessica','apepa' => 'Nayeli','apema' => '','isadm' => false],
			['usuario' => 'Pilar.Ferrer','pwd' => bcrypt('123345'),'nombre' => 'Pilar','apepa' => 'Ferrer','apema' => '','isadm' => false],
			['usuario' => 'ANI.Lisse','pwd' => bcrypt('123345'),'nombre' => 'ANI','apepa' => 'Lisse','apema' => '','isadm' => false],
			['usuario' => 'Jessica.Calderon','pwd' => bcrypt('123345'),'nombre' => 'Jessica','apepa' => 'Calderon','apema' => '','isadm' => false],
			['usuario' => 'Maya.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Maya','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Andrea.Godoy','pwd' => bcrypt('123345'),'nombre' => 'Andrea','apepa' => 'Godoy','apema' => '','isadm' => false],
			['usuario' => 'Maurio.Morales','pwd' => bcrypt('123345'),'nombre' => 'Maurio','apepa' => 'Morales','apema' => '','isadm' => false],
			['usuario' => 'Lucrecia.Ramirez','pwd' => bcrypt('123345'),'nombre' => 'Lucrecia','apepa' => 'Ramirez','apema' => '','isadm' => false],
			['usuario' => 'Lizbeth.Valle','pwd' => bcrypt('123345'),'nombre' => 'Lizbeth','apepa' => 'Valle','apema' => '','isadm' => false],
			['usuario' => 'Carlos.Hernande','pwd' => bcrypt('123345'),'nombre' => 'Carlos','apepa' => 'Hernande','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Miguel.Duran','pwd' => bcrypt('123345'),'nombre' => 'Miguel','apepa' => 'Duran','apema' => '','isadm' => false],
			['usuario' => 'Fanny.Arditti','pwd' => bcrypt('123345'),'nombre' => 'Fanny','apepa' => 'Arditti','apema' => '','isadm' => false],
			['usuario' => 'Miriam.Muñoz','pwd' => bcrypt('123345'),'nombre' => 'Miriam','apepa' => 'Muñoz','apema' => '','isadm' => false],
			['usuario' => 'Adriary.Ortiz','pwd' => bcrypt('123345'),'nombre' => 'Adriary','apepa' => 'Ortiz','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Edgar.Melo','pwd' => bcrypt('123345'),'nombre' => 'Edgar','apepa' => 'Melo','apema' => '','isadm' => false],
			['usuario' => 'Giusepp.Bortolucc','pwd' => bcrypt('123345'),'nombre' => 'Giusepp','apepa' => 'Bortolucc','apema' => '','isadm' => false],
			['usuario' => 'Rocio.Cornejo','pwd' => bcrypt('123345'),'nombre' => 'Rocio','apepa' => 'Cornejo','apema' => '','isadm' => false],
			['usuario' => 'Maria.Ileana','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Ileana','apema' => '','isadm' => false],
			['usuario' => 'Eva.Aceve','pwd' => bcrypt('123345'),'nombre' => 'Eva','apepa' => 'Aceve','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Ramon.Sandova','pwd' => bcrypt('123345'),'nombre' => 'Ramon','apepa' => 'Sandova','apema' => '','isadm' => false],
			['usuario' => 'Romina.Cueva;','pwd' => bcrypt('123345'),'nombre' => 'Romina','apepa' => 'Cueva;','apema' => '','isadm' => false],
			['usuario' => 'Charo.Ordaz','pwd' => bcrypt('123345'),'nombre' => 'Charo','apepa' => 'Ordaz','apema' => '','isadm' => false],
			['usuario' => 'Benjamin.del','pwd' => bcrypt('123345'),'nombre' => 'Benjamin','apepa' => 'del','apema' => '','isadm' => false],
			['usuario' => 'Silvia.Jauregui','pwd' => bcrypt('123345'),'nombre' => 'Silvia','apepa' => 'Jauregui','apema' => '','isadm' => false],
			['usuario' => 'Alfonso.Fuentes','pwd' => bcrypt('123345'),'nombre' => 'Alfonso','apepa' => 'Fuentes','apema' => '','isadm' => false],
			['usuario' => 'Sofia.Vargas','pwd' => bcrypt('123345'),'nombre' => 'Sofia','apepa' => 'Vargas','apema' => '','isadm' => false],
			['usuario' => 'Montserrat.Patiño','pwd' => bcrypt('123345'),'nombre' => 'Montserrat','apepa' => 'Patiño','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Taide.Daniela','pwd' => bcrypt('123345'),'nombre' => 'Taide','apepa' => 'Daniela','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Marlene.Espino','pwd' => bcrypt('123345'),'nombre' => 'Marlene','apepa' => 'Espino','apema' => '','isadm' => false],
			['usuario' => 'Daniela.Rojas','pwd' => bcrypt('123345'),'nombre' => 'Daniela','apepa' => 'Rojas','apema' => '','isadm' => false],
			['usuario' => 'Giovana.Luna','pwd' => bcrypt('123345'),'nombre' => 'Giovana','apepa' => 'Luna','apema' => '','isadm' => false],
			['usuario' => 'Paola.Segura','pwd' => bcrypt('123345'),'nombre' => 'Paola','apepa' => 'Segura','apema' => '','isadm' => false],
			['usuario' => 'Sofia.Arredon','pwd' => bcrypt('123345'),'nombre' => 'Sofia','apepa' => 'Arredon','apema' => '','isadm' => false],
			['usuario' => 'Mar.Cipri','pwd' => bcrypt('123345'),'nombre' => 'Mar','apepa' => 'Cipri','apema' => '','isadm' => false],
			['usuario' => 'Graciela.Miramontes','pwd' => bcrypt('123345'),'nombre' => 'Graciela','apepa' => 'Miramontes','apema' => '','isadm' => false],
			['usuario' => 'Daniel.Cardona','pwd' => bcrypt('123345'),'nombre' => 'Daniel','apepa' => 'Cardona','apema' => '','isadm' => false],
			['usuario' => 'Fabiola.Macias','pwd' => bcrypt('123345'),'nombre' => 'Fabiola','apepa' => 'Macias','apema' => '','isadm' => false],
			['usuario' => 'Gerardo.Bermea','pwd' => bcrypt('123345'),'nombre' => 'Gerardo','apepa' => 'Bermea','apema' => '','isadm' => false],
			['usuario' => 'Mariel.Baez','pwd' => bcrypt('123345'),'nombre' => 'Mariel','apepa' => 'Baez','apema' => '','isadm' => false],
			['usuario' => 'Clarisa.Sanchez','pwd' => bcrypt('123345'),'nombre' => 'Clarisa','apepa' => 'Sanchez','apema' => '','isadm' => false],
			['usuario' => 'Marlene.Espino','pwd' => bcrypt('123345'),'nombre' => 'Marlene','apepa' => 'Espino','apema' => '','isadm' => false],
			['usuario' => 'Jaramara.Mendoza','pwd' => bcrypt('123345'),'nombre' => 'Jaramara','apepa' => 'Mendoza','apema' => '','isadm' => false],
			['usuario' => 'Rodrigo.Ortega','pwd' => bcrypt('123345'),'nombre' => 'Rodrigo','apepa' => 'Ortega','apema' => '','isadm' => false],
			['usuario' => 'Andrea.Tejada','pwd' => bcrypt('123345'),'nombre' => 'Andrea','apepa' => 'Tejada','apema' => '','isadm' => false],
			['usuario' => 'Eduardo.Mora','pwd' => bcrypt('123345'),'nombre' => 'Eduardo','apepa' => 'Mora','apema' => '','isadm' => false],
			['usuario' => 'Ana.Luisa','pwd' => bcrypt('123345'),'nombre' => 'Ana','apepa' => 'Luisa','apema' => '','isadm' => false],
			['usuario' => 'Mariana.Martinez','pwd' => bcrypt('123345'),'nombre' => 'Mariana','apepa' => 'Martinez','apema' => '','isadm' => false],
			['usuario' => 'Cristian.Mejia','pwd' => bcrypt('123345'),'nombre' => 'Cristian','apepa' => 'Mejia','apema' => '','isadm' => false],
			['usuario' => 'Rodolfo.Urbina','pwd' => bcrypt('123345'),'nombre' => 'Rodolfo','apepa' => 'Urbina','apema' => '','isadm' => false],
			['usuario' => 'Antonieta.Pinelo','pwd' => bcrypt('123345'),'nombre' => 'Antonieta','apepa' => 'Pinelo','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Natali.Montero','pwd' => bcrypt('123345'),'nombre' => 'Natali','apepa' => 'Montero','apema' => '','isadm' => false],
			['usuario' => 'Paola.Luna','pwd' => bcrypt('123345'),'nombre' => 'Paola','apepa' => 'Luna','apema' => '','isadm' => false],
			['usuario' => 'Mayra.Perez','pwd' => bcrypt('123345'),'nombre' => 'Mayra','apepa' => 'Perez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Denisse.Martinez','pwd' => bcrypt('123345'),'nombre' => 'Denisse','apepa' => 'Martinez','apema' => '','isadm' => false],
			['usuario' => 'Brenda.Huerta','pwd' => bcrypt('123345'),'nombre' => 'Brenda','apepa' => 'Huerta','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Martha.Mejia','pwd' => bcrypt('123345'),'nombre' => 'Martha','apepa' => 'Mejia','apema' => '','isadm' => false],
			['usuario' => 'Rodrigo.NI','pwd' => bcrypt('123345'),'nombre' => 'Rodrigo','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Emmanuel.Aguilar','pwd' => bcrypt('123345'),'nombre' => 'Emmanuel','apepa' => 'Aguilar','apema' => '','isadm' => false],
			['usuario' => 'Eddy.Gonzal','pwd' => bcrypt('123345'),'nombre' => 'Eddy','apepa' => 'Gonzal','apema' => '','isadm' => false],
			['usuario' => 'Sonia.Quezada','pwd' => bcrypt('123345'),'nombre' => 'Sonia','apepa' => 'Quezada','apema' => '','isadm' => false],
			['usuario' => 'Karla.Paola','pwd' => bcrypt('123345'),'nombre' => 'Karla','apepa' => 'Paola','apema' => '','isadm' => false],
			['usuario' => 'Alejandro.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Alejandro','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Daniela.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Daniela','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'Minerva.Rojo','pwd' => bcrypt('123345'),'nombre' => 'Minerva','apepa' => 'Rojo','apema' => '','isadm' => false],
			['usuario' => 'Victor.Alvarez','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Alvarez','apema' => '','isadm' => false],
			['usuario' => 'Victor.Alvarez','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Alvarez','apema' => '','isadm' => false],
			['usuario' => 'Jessica.Ozumbilla','pwd' => bcrypt('123345'),'nombre' => 'Jessica','apepa' => 'Ozumbilla','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Jordan.Aldrich','pwd' => bcrypt('123345'),'nombre' => 'Jordan','apepa' => 'Aldrich','apema' => '','isadm' => false],
			['usuario' => 'Claudia.Lazcano','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Lazcano','apema' => '','isadm' => false],
			['usuario' => 'Dalel.Menduet','pwd' => bcrypt('123345'),'nombre' => 'Dalel','apepa' => 'Menduet','apema' => '','isadm' => false],
			['usuario' => 'Gabriela.Quirarte;','pwd' => bcrypt('123345'),'nombre' => 'Gabriela','apepa' => 'Quirarte;','apema' => '','isadm' => false],
			['usuario' => 'Victor.Arandas','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Arandas','apema' => '','isadm' => false],
			['usuario' => 'Mauricio.Najar','pwd' => bcrypt('123345'),'nombre' => 'Mauricio','apepa' => 'Najar','apema' => '','isadm' => false],
			['usuario' => 'Camilo.Mendez','pwd' => bcrypt('123345'),'nombre' => 'Camilo','apepa' => 'Mendez','apema' => '','isadm' => false],
			['usuario' => 'Valery.Baigts','pwd' => bcrypt('123345'),'nombre' => 'Valery','apepa' => 'Baigts','apema' => '','isadm' => false],
			['usuario' => 'Ruben.Martnez','pwd' => bcrypt('123345'),'nombre' => 'Ruben','apepa' => 'Martnez','apema' => '','isadm' => false],
			['usuario' => 'Fernando.Ruvalcaba','pwd' => bcrypt('123345'),'nombre' => 'Fernando','apepa' => 'Ruvalcaba','apema' => '','isadm' => false],
			['usuario' => 'Ricardo.de','pwd' => bcrypt('123345'),'nombre' => 'Ricardo','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Juan.Pedro','pwd' => bcrypt('123345'),'nombre' => 'Juan','apepa' => 'Pedro','apema' => '','isadm' => false],
			['usuario' => 'Juli.-','pwd' => bcrypt('123345'),'nombre' => 'Juli','apepa' => '-','apema' => '','isadm' => false],
			['usuario' => '.An','pwd' => bcrypt('123345'),'nombre' => '','apepa' => 'An','apema' => '','isadm' => false],
			['usuario' => 'Noria.Castro','pwd' => bcrypt('123345'),'nombre' => 'Noria','apepa' => 'Castro','apema' => '','isadm' => false],
			['usuario' => 'Karina.Maribel','pwd' => bcrypt('123345'),'nombre' => 'Karina','apepa' => 'Maribel','apema' => '','isadm' => false],
			['usuario' => '.Ir','pwd' => bcrypt('123345'),'nombre' => '','apepa' => 'Ir','apema' => '','isadm' => false],
			['usuario' => 'Silvestre.Alfaro','pwd' => bcrypt('123345'),'nombre' => 'Silvestre','apepa' => 'Alfaro','apema' => '','isadm' => false],
			['usuario' => 'Farris.Amar','pwd' => bcrypt('123345'),'nombre' => 'Farris','apepa' => 'Amar','apema' => '','isadm' => false],
			['usuario' => 'Eliabeth.Bocado','pwd' => bcrypt('123345'),'nombre' => 'Eliabeth','apepa' => 'Bocado','apema' => '','isadm' => false],
			['usuario' => 'Guillermo.Yañez','pwd' => bcrypt('123345'),'nombre' => 'Guillermo','apepa' => 'Yañez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Karina.Partida','pwd' => bcrypt('123345'),'nombre' => 'Karina','apepa' => 'Partida','apema' => '','isadm' => false],
			['usuario' => 'Schuster.Sabine','pwd' => bcrypt('123345'),'nombre' => 'Schuster','apepa' => 'Sabine','apema' => '','isadm' => false],
			['usuario' => 'Israel.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Israel','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Carolina.Rodriguez','pwd' => bcrypt('123345'),'nombre' => 'Carolina','apepa' => 'Rodriguez','apema' => '','isadm' => false],
			['usuario' => 'Andres.Espinosa','pwd' => bcrypt('123345'),'nombre' => 'Andres','apepa' => 'Espinosa','apema' => '','isadm' => false],
			['usuario' => 'Marcos.Vazquez','pwd' => bcrypt('123345'),'nombre' => 'Marcos','apepa' => 'Vazquez','apema' => '','isadm' => false],
			['usuario' => 'Patricia.Velazquez','pwd' => bcrypt('123345'),'nombre' => 'Patricia','apepa' => 'Velazquez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Eduardo.Obregon','pwd' => bcrypt('123345'),'nombre' => 'Eduardo','apepa' => 'Obregon','apema' => '','isadm' => false],
			['usuario' => 'Valeria.Liñan','pwd' => bcrypt('123345'),'nombre' => 'Valeria','apepa' => 'Liñan','apema' => '','isadm' => false],
			['usuario' => '.Ya','pwd' => bcrypt('123345'),'nombre' => '','apepa' => 'Ya','apema' => '','isadm' => false],
			['usuario' => 'Alberto.Pensado','pwd' => bcrypt('123345'),'nombre' => 'Alberto','apepa' => 'Pensado','apema' => '','isadm' => false],
			['usuario' => 'Mercadotecnia;.Mariana','pwd' => bcrypt('123345'),'nombre' => 'Mercadotecnia;','apepa' => 'Mariana','apema' => '','isadm' => false],
			['usuario' => 'Lidia.Cardern','pwd' => bcrypt('123345'),'nombre' => 'Lidia','apepa' => 'Cardern','apema' => '','isadm' => false],
			['usuario' => 'Zaida.Olivare','pwd' => bcrypt('123345'),'nombre' => 'Zaida','apepa' => 'Olivare','apema' => '','isadm' => false],
			['usuario' => 'Karina.Tabares','pwd' => bcrypt('123345'),'nombre' => 'Karina','apepa' => 'Tabares','apema' => '','isadm' => false],
			['usuario' => 'Cinthya.Cervantes','pwd' => bcrypt('123345'),'nombre' => 'Cinthya','apepa' => 'Cervantes','apema' => '','isadm' => false],
			['usuario' => 'Julio.Cesar','pwd' => bcrypt('123345'),'nombre' => 'Julio','apepa' => 'Cesar','apema' => '','isadm' => false],
			['usuario' => 'DANIEL.GoMEZ','pwd' => bcrypt('123345'),'nombre' => 'DANIEL','apepa' => 'GoMEZ','apema' => '','isadm' => false],
			['usuario' => 'Izamare.Anaya','pwd' => bcrypt('123345'),'nombre' => 'Izamare','apepa' => 'Anaya','apema' => '','isadm' => false],
		];


		$mail_address = [
			['email' => 'celizondo@ph.com.mx',],
			['email' => 'bhernandez@liverpool.com.mx;  ddiazleonm@liverpool.com.mx',],
			['email' => 'p.gonzalez@vincent.com.mx; polin_rubio@hotmail.com',],
			['email' => 'marialauracastrom@gmail.com',],
			['email' => 'paco.grupopasta@gmail.com',],
			['email' => 'alozano@cmr.mx',],
			['email' => 'Jhabiv@sushifactory.com.mx',],
			['email' => 'mvelazquez@starbucks.com.mx',],
			['email' => 'micheledurzo68@gmail.com',],
			['email' => 'alberto@almacendelbife.com',],
			['email' => 'h.bautistao@corazondealcachofa.com',],
			['email' => 'felix_dominguez@hotmail.com; raquel.lologdl@gmail.com',],
			['email' => 'alejandrogdp@me.com',],
			['email' => 'operaciones@gruposon.com',],
			['email' => 'bdesigualagdl@ph.com.mx',],
			['email' => '',],
			['email' => 'dalel.menduet@macame.com.mx',],
			['email' => 'cecilia.leyva@loccitane.com',],
			['email' => 'michelle.lomeli@dione.com.mx; comercial@dione.com.mx          ',],
			['email' => 'jcmentrepreneurs@gmail.com',],
			['email' => 'mromero@grupoodem.com',],
			['email' => 'lstavoli@grupoaxo.com',],
			['email' => 'giusepp.bortolucci@hm.com; Jimena.Lopez@hm.com',],
			['email' => '',],
			['email' => 'etrujillo@levi.com',],
			['email' => 'coordinador.mercadotecnia@brantano.com.mx',],
			['email' => 'maria.lopez@carters.com',],
			['email' => 'eherrera@oemoda.com',],
			['email' => '',],
			['email' => 'anapaula_pintado@piagui.com; viviana_pintado@piagui.com',],
			['email' => 'dmontes@h-h.com.mx; anetguarneros@h-h.com.mx',],
			['email' => 'barbara.pulido@adolfodominguez.com',],
			['email' => 'palancares@gv.com.mx',],
			['email' => 'arpar75@gmail.com',],
			['email' => 'viviana_cortes@piagui.com',],
			['email' => 'teresapina@charly.com.mx',],
			['email' => 'eulalia@kiplingmexico.com.mx',],
			['email' => 'alberdy@berdico.com.mx',],
			['email' => 'uriartefer@hotmail.com',],
			['email' => 'virginie.dubray@puma.com',],
			['email' => 'emmanuel.aguilar@hsbc.com',],
			['email' => 'sergio.delavega@bbva.com',],
			['email' => 'norberto.sanchez.solano@banorte.com',],
			['email' => 'andares@cibanco.com',],
			['email' => 'rafael.lopez@typhoonmx.com; jorge.matute@brandarrays.com',],
			['email' => 'cmoran@ph.com.mx',],
			['email' => 'cbarrileiro@bimbaylola.com',],
			['email' => '',],
			['email' => '',],
			['email' => '',],
			['email' => 'ilianato@mx.inditex.com',],
			['email' => '',],
			['email' => 'lizbethll@mx.inditex.com',],
			['email' => '',],
			['email' => 'viviana_cortes@piagui.com',],
			['email' => 'bcastro@liverpool.com.mx',],
			['email' => 'jcampos@grupoaxo.com',],
			['email' => 'pferrer@mx.estee.com',],
			['email' => 'avalle@ph.com.mx',],
			['email' => 'bmacgdl@ph.com.mx',],
			['email' => 'juancarlos.mejia@loreal.com',],
			['email' => 'andreagodoymal@gmail.com',],
			['email' => 'shifraspa132@gmail.com',],
			['email' => ' misenandares@yahoo.com',],
			['email' => 'avalle@ph.com.mx',],
			['email' => 'carlos.hernandez@macstore.mx',],
			['email' => '',],
			['email' => 'mdc@fullsand.com',],
			['email' => 'fanny_arditti@hotmail.com',],
			['email' => 'santamariaandares@hotmail.com',],
			['email' => 'ortizad@ae.com; mandujanoM@ae.com',],
			['email' => '',],
			['email' => 'edgar.octavio.melo@adidas-group.com',],
			['email' => 'giusepp.bortolucci@hm.com; Jimena.Lopez@hm.com',],
			['email' => 'storemanager@ebrands.com.mx',],
			['email' => 'inoriega@prodigy.net.mx; mminakata@alpezzi.com.mx',],
			['email' => 'imagenzapaterias@coqueta.com.mx',],
			['email' => '',],
			['email' => 'Ramon.Sandoval@quiksilver.com',],
			['email' => 'romiq@yahoo.com; FRodriguezp@tous.com',],
			['email' => 'mercadotecniatiendas@cuadra.com.mx',],
			['email' => 'bdelrazo@birkenstockmexico.com',],
			['email' => 'sjauregui@obsmex.com.mx',],
			['email' => 'jazavalaf@liverpool.com.mx>',],
			['email' => 'svargas@pandora.net',],
			['email' => 'montserrat.patino@forever-21.com.mx',],
			['email' => '',],
			['email' => ' tvekris@grupoaxo.com; ',],
			['email' => '',],
			['email' => '',],
			['email' => 'mercadotecniatennix@grupoaxo.com',],
			['email' => 'drojasc@grupoaxo.com',],
			['email' => 'gluna@grupoaxo.com',],
			['email' => 'paola.segura@benettonmex.com',],
			['email' => 'sarredondo@grupoaxo.com',],
			['email' => 'mar.cipriano@sephora.com; Trainee.Marketing1@sephora.com',],
			['email' => ' gmiramontes@grupoaxo.com',],
			['email' => ' daniel.cardona@mx.sunglasshut.com; gerardo.velasco@mx.sunglasshut.com ',],
			['email' => 'fmacias@devlyn.com.mx',],
			['email' => 'bermeamenchaca@gmail.com',],
			['email' => 'mbaez@gnc.com.mx',],
			['email' => 'clarissa.lushmx@gmail.com',],
			['email' => 'mespino@grupoaxo.com',],
			['email' => 'jaramara@tatei.com',],
			['email' => 'rodrigoortegag@hotmail.com',],
			['email' => 'Andrea.Tejeda@artsana.com',],
			['email' => 'marketing@nix.com.mx',],
			['email' => 'amolina@juguetron.mx',],
			['email' => 'mkt3@gonvill.com.mx',],
			['email' => 'cristian_mejia@mail.com',],
			['email' => 'rodolfo.urbina@gameplanet.com',],
			['email' => 'antonieta@fina-estampa.com',],
			['email' => '',],
			['email' => ' natali.montero@converse.com.mx',],
			['email' => 'pluna@mobo.mx',],
			['email' => 'mayra.perez@steren.com.mx',],
			['email' => '',],
			['email' => 'denisse.martinez.espinosa@huawei.com',],
			['email' => 'b.huerta@mygtelecom.mx',],
			['email' => '',],
			['email' => 'spakinal@gmail.com; info@spakinal.com',],
			['email' => '',],
			['email' => 'emmanuel.aguilar@hsbc.com.mx',],
			['email' => 'nis.guadalajara@natuzzi.com',],
			['email' => 'sonia.glamour1@gmail.com',],
			['email' => 'karce@actinver.com.mx',],
			['email' => 'macalexgarcia@gmail.com',],
			['email' => 'dlopez@aeromexicoandares.com',],
			['email' => 'mrojo@casegroup.com.mx',],
			['email' => 'victor@colemx.com',],
			['email' => 'victor@colemx.com',],
			['email' => 'jozumbilla@bcbg.com.mx',],
			['email' => '',],
			['email' => 'sommelier.jordan@amaris.com.mx',],
			['email' => 'merca.grupopasta@gmail.com',],
			['email' => 'dalel.menduet@macame.com.mx',],
			['email' => 'gabriela.quirarte@nespersso.com; Diana.Rodriguez@nespresso.com',],
			['email' => 'andares@hackett.com',],
			['email' => 'sistemas@palzileri.com.mx',],
			['email' => 'jcmendez@grupoaxo.com',],
			['email' => 'valerybaigts@stevemadden.com.mx; SofiaMina@stevemadden.com.mx',],
			['email' => 'rubenm@gv.com.mx',],
			['email' => 'Fruvalcaba@bridegdl.com',],
			['email' => 'ricardo.delahuerta@benandfrank.com; rodrigo.pareyon@benandfrank.com',],
			['email' => 'jpgf96@me.com',],
			['email' => 'Lamarrestaurant.Andares@gmail.com; yuligf26@gmail.com',],
			['email' => 'aborrego@ph.com.mx',],
			['email' => ' ncastrot@grupoaxo.com',],
			['email' => 'Karina_Gil@hugoboss.com',],
			['email' => 'gabriela.barrera@ggv.mx',],
			['email' => 'silvestre.alfaro@innovasport.com',],
			['email' => 'farris.amar@pfchangsmexico.com.mx',],
			['email' => 'elizabeth.bocardo@gruposacromonte.com',],
			['email' => 'memoyanezmendez@gmail.com',],
			['email' => '',],
			['email' => 'kpartida@stargdl.mx',],
			['email' => 'schuster.sabine@gmail.com',],
			['email' => 'israelgarcia@freshsalads.mx',],
			['email' => 'Carolina.Rodriguez@prb.com.mx',],
			['email' => 'andres@ks6.com.mx; albertop@ksg.com.mx',],
			['email' => 'mvazquez@gruposandys.com; dhernandez@gruposandys.com; danielahcamacho@gmail.com',],
			['email' => 'te_ento@hotmail.com',],
			['email' => '',],
			['email' => 'gte.py.andares@stargdl.mx',],
			['email' => 'mercadotecnia@cafelaflordecordoba.com',],
			['email' => 'sunfagdl@gmail.com',],
			['email' => 'albertopensado@hotmail.com',],
			['email' => 'mercadotecnia@pollopepe.com.mx;  <mariana.santos@pollopepe.com.mx>',],
			['email' => 'lidia@qin.mx; vmartinez@qin.mx',],
			['email' => 'franquicias@thesushiandsaladsco.com',],
			['email' => 'karina.tabares@alsea.com.mx; arturo.fuentes@alsea.com.mx',],
			['email' => ' cinthya.cervantes@inoplay.com',],
			['email' => 'jmendozaal@televisa.com.mx; mpfloresli@televisa.com.mx',],
			['email' => 'daniel@enigmarooms.com.mx',],
			['email' => 'cvip_andares_gdl@cinepolis.com',]
		];


		$positions = [
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
			'Mercadotecnia',
		];

		$brands = [
			3,
			4,
			5,
			6,
			7,
			8,
			9,
			10,
			12,
			13,
			14,
			15,
			16,
			17,
			18,
			19,
			20,
			21,
			22,
			23,
			24,
			25,
			26,
			27,
			28,
			29,
			30,
			31,
			32,
			33,
			34,
			35,
			36,
			37,
			38,
			39,
			40,
			41,
			42,
			43,
			44,
			45,
			46,
			47,
			48,
			49,
			50,
			51,
			52,
			53,
			54,
			55,
			56,
			57,
			58,
			59,
			60,
			61,
			62,
			63,
			64,
			65,
			66,
			67,
			68,
			69,
			70,
			71,
			72,
			73,
			74,
			75,
			76,
			77,
			78,
			79,
			80,
			81,
			82,
			83,
			84,
			85,
			86,
			87,
			88,
			89,
			90,
			91,
			92,
			93,
			94,
			95,
			96,
			97,
			98,
			99,
			100,
			101,
			102,
			103,
			104,
			105,
			106,
			107,
			108,
			109,
			110,
			111,
			112,
			113,
			114,
			115,
			116,
			117,
			118,
			119,
			120,
			121,
			122,
			123,
			124,
			125,
			126,
			127,
			128,
			129,
			130,
			131,
			132,
			133,
			134,
			135,
			136,
			137,
			138,
			139,
			140,
			141,
			142,
			143,
			144,
			145,
			146,
			147,
			148,
			149,
			150,
			151,
			152,
			153,
			154,
			155,
			156,
			157,
			158,
			159,
			160,
			161,
			162,
			163,
			164,
			165,
			166,
			167,
			168,
			169,
			170,
			171,
			172,
			173,
			174,
			175,
			176,
			177,
			178,
		];

		foreach ($users as $key => $u) {
			$user_seg = SegUsuario::create($u);

			$user = User::create([
				'cat_brand_id' => $brands[$key],
				'cat_user_type_id' => 4,
				'SEG_USUARIOS_usuarioId' => $user_seg->usuarioId,
				'birth_date' => Carbon::now(),
				'position' => $positions[$key],
				'deleted' => 0
			]);

			MailAddress::create([
				'users_id' => $user->id,
				'mail' => $mail_address[$key]['email']
			]);

			$seg_subsec = SegSubSeccion::get();

			$admin_filter = $seg_subsec->filter( function($val) {
				return $val->subsecId >= 3;
			});

			foreach ($admin_filter as $menu) {
				SegLogin::create([
					'usuarioId' => $user_seg->usuarioId,
					'subsecId' => $menu->subsecId,
					'loginUsr' =>  $user_seg->usuario,
					'loginCrud' => 'C,R,I,E,P'
				]);
			}

		}
    }
}
