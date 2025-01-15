<?php

namespace Database\Seeders;

use App\Models\MailAddress;
use App\Models\SegLogin;
use App\Models\SegSubSeccion;
use App\Models\SegUsuario;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LesseeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [
			['usuario' => 'Guadalupe.Rivera','pwd' => bcrypt('123345'),'nombre' => 'Guadalupe','apepa' => 'Rivera','apema' => '','isadm' => false],
			['usuario' => 'Priscila.Chavez','pwd' => bcrypt('123345'),'nombre' => 'Priscila','apepa' => 'Chavez','apema' => '','isadm' => false],
			['usuario' => 'Leopoldo.Mauricio','pwd' => bcrypt('123345'),'nombre' => 'Leopoldo','apepa' => 'Mauricio','apema' => '','isadm' => false],
			['usuario' => 'Julio.Vega','pwd' => bcrypt('123345'),'nombre' => 'Julio','apepa' => 'Vega','apema' => '','isadm' => false],
			['usuario' => 'Paco.Ramire','pwd' => bcrypt('123345'),'nombre' => 'Paco','apepa' => 'Ramire','apema' => '','isadm' => false],
			['usuario' => 'Ernesto.Guevara','pwd' => bcrypt('123345'),'nombre' => 'Ernesto','apepa' => 'Guevara','apema' => '','isadm' => false],
			['usuario' => 'Isai.Lazcan','pwd' => bcrypt('123345'),'nombre' => 'Isai','apepa' => 'Lazcan','apema' => '','isadm' => false],
			['usuario' => 'Luz.Janet','pwd' => bcrypt('123345'),'nombre' => 'Luz','apepa' => 'Janet','apema' => '','isadm' => false],
			['usuario' => 'Aaron.Bernal','pwd' => bcrypt('123345'),'nombre' => 'Aaron','apepa' => 'Bernal','apema' => '','isadm' => false],
			['usuario' => 'Jorge.Torre','pwd' => bcrypt('123345'),'nombre' => 'Jorge','apepa' => 'Torre','apema' => '','isadm' => false],
			['usuario' => 'Jorge.Anaya','pwd' => bcrypt('123345'),'nombre' => 'Jorge','apepa' => 'Anaya','apema' => '','isadm' => false],
			['usuario' => 'Felix.Domingu','pwd' => bcrypt('123345'),'nombre' => 'Felix','apepa' => 'Domingu','apema' => '','isadm' => false],
			['usuario' => 'Carlos.Ibarra','pwd' => bcrypt('123345'),'nombre' => 'Carlos','apepa' => 'Ibarra','apema' => '','isadm' => false],
			['usuario' => 'Javier.Muñoz','pwd' => bcrypt('123345'),'nombre' => 'Javier','apepa' => 'Muñoz','apema' => '','isadm' => false],
			['usuario' => 'Saira.Lizbeth','pwd' => bcrypt('123345'),'nombre' => 'Saira','apepa' => 'Lizbeth','apema' => '','isadm' => false],
			['usuario' => 'Oscar.Bader','pwd' => bcrypt('123345'),'nombre' => 'Oscar','apepa' => 'Bader','apema' => '','isadm' => false],
			['usuario' => 'Claudia.Del','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Del','apema' => '','isadm' => false],
			['usuario' => 'Jose.De','pwd' => bcrypt('123345'),'nombre' => 'Jose','apepa' => 'De','apema' => '','isadm' => false],
			['usuario' => 'Daniela.Cabrera','pwd' => bcrypt('123345'),'nombre' => 'Daniela','apepa' => 'Cabrera','apema' => '','isadm' => false],
			['usuario' => 'Patricia.Diaz','pwd' => bcrypt('123345'),'nombre' => 'Patricia','apepa' => 'Diaz','apema' => '','isadm' => false],
			['usuario' => 'Maria.Mirasol','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Mirasol','apema' => '','isadm' => false],
			['usuario' => 'Christian.Paul','pwd' => bcrypt('123345'),'nombre' => 'Christian','apepa' => 'Paul','apema' => '','isadm' => false],
			['usuario' => 'Nadia.de','pwd' => bcrypt('123345'),'nombre' => 'Nadia','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Alejandra.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Alejandra','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Andres.Martinez','pwd' => bcrypt('123345'),'nombre' => 'Andres','apepa' => 'Martinez','apema' => '','isadm' => false],
			['usuario' => 'Jaime.Cuevas','pwd' => bcrypt('123345'),'nombre' => 'Jaime','apepa' => 'Cuevas','apema' => '','isadm' => false],
			['usuario' => 'Estela.Angelica','pwd' => bcrypt('123345'),'nombre' => 'Estela','apepa' => 'Angelica','apema' => '','isadm' => false],
			['usuario' => 'Isabel.Alvarez','pwd' => bcrypt('123345'),'nombre' => 'Isabel','apepa' => 'Alvarez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Michel.Chaurand','pwd' => bcrypt('123345'),'nombre' => 'Michel','apepa' => 'Chaurand','apema' => '','isadm' => false],
			['usuario' => 'Eduardo.Flores','pwd' => bcrypt('123345'),'nombre' => 'Eduardo','apepa' => 'Flores','apema' => '','isadm' => false],
			['usuario' => 'Rosalia.Serratos','pwd' => bcrypt('123345'),'nombre' => 'Rosalia','apepa' => 'Serratos','apema' => '','isadm' => false],
			['usuario' => 'Socorro.Siordia','pwd' => bcrypt('123345'),'nombre' => 'Socorro','apepa' => 'Siordia','apema' => '','isadm' => false],
			['usuario' => 'Mayra.Alejand','pwd' => bcrypt('123345'),'nombre' => 'Mayra','apepa' => 'Alejand','apema' => '','isadm' => false],
			['usuario' => 'Fernanda.Pujoi','pwd' => bcrypt('123345'),'nombre' => 'Fernanda','apepa' => 'Pujoi','apema' => '','isadm' => false],
			['usuario' => 'Oswaldo.Caldera','pwd' => bcrypt('123345'),'nombre' => 'Oswaldo','apepa' => 'Caldera','apema' => '','isadm' => false],
			['usuario' => 'Victor.Sanchez','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Sanchez','apema' => '','isadm' => false],
			['usuario' => 'Minerva.Martinez','pwd' => bcrypt('123345'),'nombre' => 'Minerva','apepa' => 'Martinez','apema' => '','isadm' => false],
			['usuario' => 'Diego.Nuño','pwd' => bcrypt('123345'),'nombre' => 'Diego','apepa' => 'Nuño','apema' => '','isadm' => false],
			['usuario' => 'Alexis.Rios','pwd' => bcrypt('123345'),'nombre' => 'Alexis','apepa' => 'Rios','apema' => '','isadm' => false],
			['usuario' => 'Carolina.Morales','pwd' => bcrypt('123345'),'nombre' => 'Carolina','apepa' => 'Morales','apema' => '','isadm' => false],
			['usuario' => 'Jorge.Hernand','pwd' => bcrypt('123345'),'nombre' => 'Jorge','apepa' => 'Hernand','apema' => '','isadm' => false],
			['usuario' => 'Alberto.Gutierrez','pwd' => bcrypt('123345'),'nombre' => 'Alberto','apepa' => 'Gutierrez','apema' => '','isadm' => false],
			['usuario' => 'Raymundo.Rodriguez','pwd' => bcrypt('123345'),'nombre' => 'Raymundo','apepa' => 'Rodriguez','apema' => '','isadm' => false],
			['usuario' => 'Jose.Avila','pwd' => bcrypt('123345'),'nombre' => 'Jose','apepa' => 'Avila','apema' => '','isadm' => false],
			['usuario' => 'Ramon.Sanchez','pwd' => bcrypt('123345'),'nombre' => 'Ramon','apepa' => 'Sanchez','apema' => '','isadm' => false],
			['usuario' => 'Araceli.Hernandez','pwd' => bcrypt('123345'),'nombre' => 'Araceli','apepa' => 'Hernandez','apema' => '','isadm' => false],
			['usuario' => 'Sara.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Sara','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Humberto.Vidal','pwd' => bcrypt('123345'),'nombre' => 'Humberto','apepa' => 'Vidal','apema' => '','isadm' => false],
			['usuario' => 'Lizbeth.Luis','pwd' => bcrypt('123345'),'nombre' => 'Lizbeth','apepa' => 'Luis','apema' => '','isadm' => false],
			['usuario' => 'Berenice.Ramirez','pwd' => bcrypt('123345'),'nombre' => 'Berenice','apepa' => 'Ramirez','apema' => '','isadm' => false],
			['usuario' => 'Miguel.Angel','pwd' => bcrypt('123345'),'nombre' => 'Miguel','apepa' => 'Angel','apema' => '','isadm' => false],
			['usuario' => 'Christian.ANI','pwd' => bcrypt('123345'),'nombre' => 'Christian','apepa' => 'ANI','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Michel.Chaurand','pwd' => bcrypt('123345'),'nombre' => 'Michel','apepa' => 'Chaurand','apema' => '','isadm' => false],
			['usuario' => 'Paola.Muñoz','pwd' => bcrypt('123345'),'nombre' => 'Paola','apepa' => 'Muñoz','apema' => '','isadm' => false],
			['usuario' => 'Kenia.Cubian','pwd' => bcrypt('123345'),'nombre' => 'Kenia','apepa' => 'Cubian','apema' => '','isadm' => false],
			['usuario' => 'Rocio.Castañe','pwd' => bcrypt('123345'),'nombre' => 'Rocio','apepa' => 'Castañe','apema' => '','isadm' => false],
			['usuario' => 'Denys.Salazar','pwd' => bcrypt('123345'),'nombre' => 'Denys','apepa' => 'Salazar','apema' => '','isadm' => false],
			['usuario' => 'Jose.de','pwd' => bcrypt('123345'),'nombre' => 'Jose','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Carlos.Mayerste','pwd' => bcrypt('123345'),'nombre' => 'Carlos','apepa' => 'Mayerste','apema' => '','isadm' => false],
			['usuario' => 'Jessica.Calderon','pwd' => bcrypt('123345'),'nombre' => 'Jessica','apepa' => 'Calderon','apema' => '','isadm' => false],
			['usuario' => 'Sara.Soto','pwd' => bcrypt('123345'),'nombre' => 'Sara','apepa' => 'Soto','apema' => '','isadm' => false],
			['usuario' => 'Andrea.Godoy','pwd' => bcrypt('123345'),'nombre' => 'Andrea','apepa' => 'Godoy','apema' => '','isadm' => false],
			['usuario' => 'Alejandra.Goez','pwd' => bcrypt('123345'),'nombre' => 'Alejandra','apepa' => 'Goez','apema' => '','isadm' => false],
			['usuario' => 'Jazmin.NI','pwd' => bcrypt('123345'),'nombre' => 'Jazmin','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Maria.Lucreco','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Lucreco','apema' => '','isadm' => false],
			['usuario' => 'Diana.Godinez','pwd' => bcrypt('123345'),'nombre' => 'Diana','apepa' => 'Godinez','apema' => '','isadm' => false],
			['usuario' => 'Josue.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Josue','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Miguel.Duran','pwd' => bcrypt('123345'),'nombre' => 'Miguel','apepa' => 'Duran','apema' => '','isadm' => false],
			['usuario' => 'Fanny.Arditti','pwd' => bcrypt('123345'),'nombre' => 'Fanny','apepa' => 'Arditti','apema' => '','isadm' => false],
			['usuario' => 'MIRIAM.MABEL','pwd' => bcrypt('123345'),'nombre' => 'MIRIAM','apepa' => 'MABEL','apema' => '','isadm' => false],
			['usuario' => 'Fernanda.Eguiarte','pwd' => bcrypt('123345'),'nombre' => 'Fernanda','apepa' => 'Eguiarte','apema' => '','isadm' => false],
			['usuario' => 'Jazmin.Zaldivar','pwd' => bcrypt('123345'),'nombre' => 'Jazmin','apepa' => 'Zaldivar','apema' => '','isadm' => false],
			['usuario' => 'Victor.Hugo','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Hugo','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Denisse.Vidaño','pwd' => bcrypt('123345'),'nombre' => 'Denisse','apepa' => 'Vidaño','apema' => '','isadm' => false],
			['usuario' => 'Amalia.Suarez','pwd' => bcrypt('123345'),'nombre' => 'Amalia','apepa' => 'Suarez','apema' => '','isadm' => false],
			['usuario' => 'Melissa.Espinoza','pwd' => bcrypt('123345'),'nombre' => 'Melissa','apepa' => 'Espinoza','apema' => '','isadm' => false],
			['usuario' => 'Rocio.Hernand','pwd' => bcrypt('123345'),'nombre' => 'Rocio','apepa' => 'Hernand','apema' => '','isadm' => false],
			['usuario' => 'Manuel.Herrera','pwd' => bcrypt('123345'),'nombre' => 'Manuel','apepa' => 'Herrera','apema' => '','isadm' => false],
			['usuario' => 'Laura.Covarru','pwd' => bcrypt('123345'),'nombre' => 'Laura','apepa' => 'Covarru','apema' => '','isadm' => false],
			['usuario' => 'Irene.Resendi','pwd' => bcrypt('123345'),'nombre' => 'Irene','apepa' => 'Resendi','apema' => '','isadm' => false],
			['usuario' => 'Erika.Landeta','pwd' => bcrypt('123345'),'nombre' => 'Erika','apepa' => 'Landeta','apema' => '','isadm' => false],
			['usuario' => 'Karlo.Moreno','pwd' => bcrypt('123345'),'nombre' => 'Karlo','apepa' => 'Moreno','apema' => '','isadm' => false],
			['usuario' => 'Brenda.Yolotzin','pwd' => bcrypt('123345'),'nombre' => 'Brenda','apepa' => 'Yolotzin','apema' => '','isadm' => false],
			['usuario' => 'Cesar.Lopez','pwd' => bcrypt('123345'),'nombre' => 'Cesar','apepa' => 'Lopez','apema' => '','isadm' => false],
			['usuario' => 'Priscila.Anai','pwd' => bcrypt('123345'),'nombre' => 'Priscila','apepa' => 'Anai','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Elizabeth.Delgado','pwd' => bcrypt('123345'),'nombre' => 'Elizabeth','apepa' => 'Delgado','apema' => '','isadm' => false],
			['usuario' => 'Brandon.Gonzalez','pwd' => bcrypt('123345'),'nombre' => 'Brandon','apepa' => 'Gonzalez','apema' => '','isadm' => false],
			['usuario' => 'Carlos.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Carlos','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Fabian.Castillo','pwd' => bcrypt('123345'),'nombre' => 'Fabian','apepa' => 'Castillo','apema' => '','isadm' => false],
			['usuario' => 'Martha.Ordaz','pwd' => bcrypt('123345'),'nombre' => 'Martha','apepa' => 'Ordaz','apema' => '','isadm' => false],
			['usuario' => 'Said.Lara','pwd' => bcrypt('123345'),'nombre' => 'Said','apepa' => 'Lara','apema' => '','isadm' => false],
			['usuario' => 'Erika.Viguera','pwd' => bcrypt('123345'),'nombre' => 'Erika','apepa' => 'Viguera','apema' => '','isadm' => false],
			['usuario' => 'Karina.Pulido','pwd' => bcrypt('123345'),'nombre' => 'Karina','apepa' => 'Pulido','apema' => '','isadm' => false],
			['usuario' => 'Crystal.Mejia','pwd' => bcrypt('123345'),'nombre' => 'Crystal','apepa' => 'Mejia','apema' => '','isadm' => false],
			['usuario' => 'Alejandro.Perea','pwd' => bcrypt('123345'),'nombre' => 'Alejandro','apepa' => 'Perea','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Luis.Precia','pwd' => bcrypt('123345'),'nombre' => 'Luis','apepa' => 'Precia','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Benjamin.Torres','pwd' => bcrypt('123345'),'nombre' => 'Benjamin','apepa' => 'Torres','apema' => '','isadm' => false],
			['usuario' => 'Cesar.Barrera','pwd' => bcrypt('123345'),'nombre' => 'Cesar','apepa' => 'Barrera','apema' => '','isadm' => false],
			['usuario' => 'Fernando.FNI','pwd' => bcrypt('123345'),'nombre' => 'Fernando','apepa' => 'FNI','apema' => '','isadm' => false],
			['usuario' => 'Adolfo.Rabadan','pwd' => bcrypt('123345'),'nombre' => 'Adolfo','apepa' => 'Rabadan','apema' => '','isadm' => false],
			['usuario' => 'Rodrigo.Ortega','pwd' => bcrypt('123345'),'nombre' => 'Rodrigo','apepa' => 'Ortega','apema' => '','isadm' => false],
			['usuario' => 'Alejandra.Reyes','pwd' => bcrypt('123345'),'nombre' => 'Alejandra','apepa' => 'Reyes','apema' => '','isadm' => false],
			['usuario' => 'Fabiola.Rosas','pwd' => bcrypt('123345'),'nombre' => 'Fabiola','apepa' => 'Rosas','apema' => '','isadm' => false],
			['usuario' => 'Carlos.Jaramill','pwd' => bcrypt('123345'),'nombre' => 'Carlos','apepa' => 'Jaramill','apema' => '','isadm' => false],
			['usuario' => 'Claudia.Ocampo','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Ocampo','apema' => '','isadm' => false],
			['usuario' => 'Alan.Ayala','pwd' => bcrypt('123345'),'nombre' => 'Alan','apepa' => 'Ayala','apema' => '','isadm' => false],
			['usuario' => 'Guillermo.Rojas','pwd' => bcrypt('123345'),'nombre' => 'Guillermo','apepa' => 'Rojas','apema' => '','isadm' => false],
			['usuario' => 'Juan.Carlos','pwd' => bcrypt('123345'),'nombre' => 'Juan','apepa' => 'Carlos','apema' => '','isadm' => false],
			['usuario' => 'Sara.Sanche','pwd' => bcrypt('123345'),'nombre' => 'Sara','apepa' => 'Sanche','apema' => '','isadm' => false],
			['usuario' => 'Jordan.Montemay','pwd' => bcrypt('123345'),'nombre' => 'Jordan','apepa' => 'Montemay','apema' => '','isadm' => false],
			['usuario' => 'Fernando.Lafaire','pwd' => bcrypt('123345'),'nombre' => 'Fernando','apepa' => 'Lafaire','apema' => '','isadm' => false],
			['usuario' => 'Marco.Antonio','pwd' => bcrypt('123345'),'nombre' => 'Marco','apepa' => 'Antonio','apema' => '','isadm' => false],
			['usuario' => 'Diane.Lozano','pwd' => bcrypt('123345'),'nombre' => 'Diane','apepa' => 'Lozano','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Alexander.Gomez','pwd' => bcrypt('123345'),'nombre' => 'Alexander','apepa' => 'Gomez','apema' => '','isadm' => false],
			['usuario' => 'NI.NI','pwd' => bcrypt('123345'),'nombre' => 'NI','apepa' => 'NI','apema' => '','isadm' => false],
			['usuario' => 'Victor.Alfonso','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Alfonso','apema' => '','isadm' => false],
			['usuario' => 'Brenda.Triguero','pwd' => bcrypt('123345'),'nombre' => 'Brenda','apepa' => 'Triguero','apema' => '','isadm' => false],
			['usuario' => 'Gretchen.Ivette','pwd' => bcrypt('123345'),'nombre' => 'Gretchen','apepa' => 'Ivette','apema' => '','isadm' => false],
			['usuario' => 'Martha.Mejia','pwd' => bcrypt('123345'),'nombre' => 'Martha','apepa' => 'Mejia','apema' => '','isadm' => false],
			['usuario' => 'Ruben.Alejand','pwd' => bcrypt('123345'),'nombre' => 'Ruben','apepa' => 'Alejand','apema' => '','isadm' => false],
			['usuario' => 'Carolina.Morales','pwd' => bcrypt('123345'),'nombre' => 'Carolina','apepa' => 'Morales','apema' => '','isadm' => false],
			['usuario' => 'Eddy.Gonzal','pwd' => bcrypt('123345'),'nombre' => 'Eddy','apepa' => 'Gonzal','apema' => '','isadm' => false],
			['usuario' => 'Martha.Perz','pwd' => bcrypt('123345'),'nombre' => 'Martha','apepa' => 'Perz','apema' => '','isadm' => false],
			['usuario' => 'Francisco.Javier','pwd' => bcrypt('123345'),'nombre' => 'Francisco','apepa' => 'Javier','apema' => '','isadm' => false],
			['usuario' => 'Maria.Ines','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Ines','apema' => '','isadm' => false],
			['usuario' => 'Armando.Aldana','pwd' => bcrypt('123345'),'nombre' => 'Armando','apepa' => 'Aldana','apema' => '','isadm' => false],
			['usuario' => 'Minerva.Rojo','pwd' => bcrypt('123345'),'nombre' => 'Minerva','apepa' => 'Rojo','apema' => '','isadm' => false],
			['usuario' => 'Jesus.Castañe','pwd' => bcrypt('123345'),'nombre' => 'Jesus','apepa' => 'Castañe','apema' => '','isadm' => false],
			['usuario' => 'Gildardo.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Gildardo','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => '.Bl','pwd' => bcrypt('123345'),'nombre' => '','apepa' => 'Bl','apema' => '','isadm' => false],
			['usuario' => 'Victor.Aguayo','pwd' => bcrypt('123345'),'nombre' => 'Victor','apepa' => 'Aguayo','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Jordan.Aldrich','pwd' => bcrypt('123345'),'nombre' => 'Jordan','apepa' => 'Aldrich','apema' => '','isadm' => false],
			['usuario' => 'Miriam.de','pwd' => bcrypt('123345'),'nombre' => 'Miriam','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Lorena.Briseño','pwd' => bcrypt('123345'),'nombre' => 'Lorena','apepa' => 'Briseño','apema' => '','isadm' => false],
			['usuario' => 'Gerardo.Cornejo','pwd' => bcrypt('123345'),'nombre' => 'Gerardo','apepa' => 'Cornejo','apema' => '','isadm' => false],
			['usuario' => 'Patricio.Cabrera','pwd' => bcrypt('123345'),'nombre' => 'Patricio','apepa' => 'Cabrera','apema' => '','isadm' => false],
			['usuario' => 'Jose.de','pwd' => bcrypt('123345'),'nombre' => 'Jose','apepa' => 'de','apema' => '','isadm' => false],
			['usuario' => 'Daniel.Hernande','pwd' => bcrypt('123345'),'nombre' => 'Daniel','apepa' => 'Hernande','apema' => '','isadm' => false],
			['usuario' => 'Abraham.Hernadez','pwd' => bcrypt('123345'),'nombre' => 'Abraham','apepa' => 'Hernadez','apema' => '','isadm' => false],
			['usuario' => 'Alejandra.Olivares','pwd' => bcrypt('123345'),'nombre' => 'Alejandra','apepa' => 'Olivares','apema' => '','isadm' => false],
			['usuario' => 'Ana.Sandr','pwd' => bcrypt('123345'),'nombre' => 'Ana','apepa' => 'Sandr','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Rodrigo.Pareyon ','pwd' => bcrypt('123345'),'nombre' => 'Rodrigo','apepa' => 'Pareyon ','apema' => '','isadm' => false],
			['usuario' => 'Guillermo.Gonzalez','pwd' => bcrypt('123345'),'nombre' => 'Guillermo','apepa' => 'Gonzalez','apema' => '','isadm' => false],
			['usuario' => 'Adrian.Huerta','pwd' => bcrypt('123345'),'nombre' => 'Adrian','apepa' => 'Huerta','apema' => '','isadm' => false],
			['usuario' => 'Cristina.Orozco','pwd' => bcrypt('123345'),'nombre' => 'Cristina','apepa' => 'Orozco','apema' => '','isadm' => false],
			['usuario' => 'Manuel.Medrano','pwd' => bcrypt('123345'),'nombre' => 'Manuel','apepa' => 'Medrano','apema' => '','isadm' => false],
			['usuario' => 'Maria.Guadalu','pwd' => bcrypt('123345'),'nombre' => 'Maria','apepa' => 'Guadalu','apema' => '','isadm' => false],
			['usuario' => 'Claudia.Rojas','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Rojas','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Farris.Amar','pwd' => bcrypt('123345'),'nombre' => 'Farris','apepa' => 'Amar','apema' => '','isadm' => false],
			['usuario' => 'Arnulfo.Martinez','pwd' => bcrypt('123345'),'nombre' => 'Arnulfo','apepa' => 'Martinez','apema' => '','isadm' => false],
			['usuario' => 'Guillermo.Yañez','pwd' => bcrypt('123345'),'nombre' => 'Guillermo','apepa' => 'Yañez','apema' => '','isadm' => false],
			['usuario' => 'Tania.Resendi','pwd' => bcrypt('123345'),'nombre' => 'Tania','apepa' => 'Resendi','apema' => '','isadm' => false],
			['usuario' => 'Luis.Bernab','pwd' => bcrypt('123345'),'nombre' => 'Luis','apepa' => 'Bernab','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Israel.Garcia','pwd' => bcrypt('123345'),'nombre' => 'Israel','apepa' => 'Garcia','apema' => '','isadm' => false],
			['usuario' => 'Luis.Baraja','pwd' => bcrypt('123345'),'nombre' => 'Luis','apepa' => 'Baraja','apema' => '','isadm' => false],
			['usuario' => 'Alberto.Pineda','pwd' => bcrypt('123345'),'nombre' => 'Alberto','apepa' => 'Pineda','apema' => '','isadm' => false],
			['usuario' => 'Claudia.Castañeda','pwd' => bcrypt('123345'),'nombre' => 'Claudia','apepa' => 'Castañeda','apema' => '','isadm' => false],
			['usuario' => 'Patricia.Velazquez','pwd' => bcrypt('123345'),'nombre' => 'Patricia','apepa' => 'Velazquez','apema' => '','isadm' => false],
			['usuario' => 'ni.ni','pwd' => bcrypt('123345'),'nombre' => 'ni','apepa' => 'ni','apema' => '','isadm' => false],
			['usuario' => 'Eduardo.Obregon','pwd' => bcrypt('123345'),'nombre' => 'Eduardo','apepa' => 'Obregon','apema' => '','isadm' => false],
			['usuario' => 'Esmeralda.Landeros','pwd' => bcrypt('123345'),'nombre' => 'Esmeralda','apepa' => 'Landeros','apema' => '','isadm' => false],
			['usuario' => 'Yarko.S.GNI','pwd' => bcrypt('123345'),'nombre' => 'Yarko','apepa' => 'S.GNI','apema' => '','isadm' => false],
			['usuario' => 'Alberto.Pensado','pwd' => bcrypt('123345'),'nombre' => 'Alberto','apepa' => 'Pensado','apema' => '','isadm' => false],
			['usuario' => 'Zayda.Avalos','pwd' => bcrypt('123345'),'nombre' => 'Zayda','apepa' => 'Avalos','apema' => '','isadm' => false],
			['usuario' => 'Hector.Alejandr','pwd' => bcrypt('123345'),'nombre' => 'Hector','apepa' => 'Alejandr','apema' => '','isadm' => false],
			['usuario' => 'Marisol.Vazquez','pwd' => bcrypt('123345'),'nombre' => 'Marisol','apepa' => 'Vazquez','apema' => '','isadm' => false],
			['usuario' => 'Celeste.Campos','pwd' => bcrypt('123345'),'nombre' => 'Celeste','apepa' => 'Campos','apema' => '','isadm' => false],
			['usuario' => 'Cynthia.Cervantes','pwd' => bcrypt('123345'),'nombre' => 'Cynthia','apepa' => 'Cervantes','apema' => '','isadm' => false],
			['usuario' => 'Diego.Chavez','pwd' => bcrypt('123345'),'nombre' => 'Diego','apepa' => 'Chavez','apema' => '','isadm' => false],
			['usuario' => 'angeles.Arena','pwd' => bcrypt('123345'),'nombre' => 'angeles','apepa' => 'Arena','apema' => '','isadm' => false],
			['usuario' => 'Daniel.Olaf','pwd' => bcrypt('123345'),'nombre' => 'Daniel','apepa' => 'Olaf','apema' => '','isadm' => false],
			['usuario' => 'Sujey.Adriana','pwd' => bcrypt('123345'),'nombre' => 'Sujey','apepa' => 'Adriana','apema' => '','isadm' => false],
		];


		$mail_address = [
			['email' => 'atnclientesgdl@ph.com.mx',],
			['email' => 'atencion@liverpool.com.mx',],
			['email' => 'contacto@vincent.com.mx',],
			['email' => 'gerencia@fargocantina.mx',],
			['email' => 'lapasteria.andares@gmail.com; lapasteriaandares@gmail.com',],
			['email' => 'andares@chilis.com.mx',],
			['email' => 'andares@sushifactory.com.mx',],
			['email' => 'sbmx38861@starbucks.com.mx',],
			['email' => 'direccion@lamoresca.com',],
			['email' => 'jtorre@almacendelbife.com',],
			['email' => 'facturacion.andares@corazondealcachofa.com',],
			['email' => 'luiscarlossanchez@ymail.com',],
			['email' => 'gerenciaandares@gruposon.com',],
			['email' => 'gerenciajuniko@gruposon.com',],
			['email' => 'bdesigualagdl@ph.com.mx',],
			['email' => 'andares@emwa.com.mx',],
			['email' => 'claudia.deltoro@macame.com.mx ',],
			['email' => 'mxstore009lo@loccitane.com.mx',],
			['email' => 'andares@dione.com.mx',],
			['email' => 'andares@zingara.com.mx',],
			['email' => 'vhernandez@grupoodem.com',],
			['email' => 'rapsodia_guadalajara@grupoaxo.com',],
			['email' => 'nadia.delarosa@store.hm.com',],
			['email' => 'baldogdl@ph.com.mx',],
			['email' => 'mbxmxlsandares@levi.com; jmartinezluna@levi.com',],
			['email' => 'andares@brantano.com.mx',],
			['email' => 'storemx014@carters.com',],
			['email' => 'andares@oemoda.com',],
			['email' => '',],
			['email' => 'massmarcas_andares@piagui.com',],
			['email' => 'h014@highlife.com.mx',],
			['email' => 'guadalajara16t@adolfodominguez.mx; ',],
			['email' => 'andaresgv@gv.com.mx',],
			['email' => 'arpar75@gmail.com',],
			['email' => 'camper_plazaandares@piagui.com',],
			['email' => 'gdl017@charly.com.mx',],
			['email' => 'guadalajara@kiplingmexico.com.mx',],
			['email' => 'atn_clientes@kauffmanopticas.com.mx; llopez@berdico.com.mx',],
			['email' => 'andareslacoste@outlook.es',],
			['email' => 'guadalajara-andares.mx@puma.com',],
			['email' => 'mexico_suc3804@hsbc.com.mx',],
			['email' => 'jorge.hernandez.martinez.contractor@bbva.com ',],
			['email' => 'alberto.gutierrez@banorte.com',],
			['email' => 'andares@cibanco.com',],
			['email' => 's321@typhoonsports.com.mx',],
			['email' => 'bnorthfaceand@ph.com.mx',],
			['email' => 'mexico_andares@bimbaylola.com',],
			['email' => 'saravlg@mx.inditex.com',],
			['email' => '053440101@store.inditex.com',],
			['email' => '045650101@store.inditex.com',],
			['email' => '077380101@store.inditex.com',],
			['email' => '',],
			['email' => 'maribelag@mx.inditex.com',],
			['email' => 'andreinapdp@mx.inditex.com',],
			['email' => '',],
			['email' => 'adidasor_andares@piagui.com',],
			['email' => 'zapopansf279@elcorteingles.es',],
			['email' => 'guess_andares@grupoaxo.com',],
			['email' => 'guess_andares@grupoaxo.com',],
			['email' => 'cmaciash@lelabofragrances.com',],
			['email' => 'bsamsungandgdl@ph.com.mx',],
			['email' => 'bsamsungandgdl@ph.com.mx',],
			['email' => 'bmacgdl@ph.com.mx',],
			['email' => 'mariadelrosario.motta@loreal.com',],
			['email' => 'info@kaanaswimwear.com; andreagodoymal@gmail.com',],
			['email' => 'shifraspa132@gmail.com',],
			['email' => 'shifraspa132@gmail.com',],
			['email' => 'facturacionmisenandares@gmail.com',],
			['email' => 'bmangoand@ph.com.mx',],
			['email' => 'carlos.gomez@macstore.cloud; josue.lopez@macstore.cloud',],
			['email' => '',],
			['email' => 'andaresgdl@fullsand.com',],
			['email' => 'shirianandares@gmail.com',],
			['email' => 'santamariaandares@hotmail.com',],
			['email' => 'eguiartef@ae.com ',],
			['email' => 'hollister_andaresgdl@grupoaxo.com',],
			['email' => 'tdaand@adidas.com',],
			['email' => 'nadia.delarosa@store.hm.com',],
			['email' => 'melissashoesandaresgdl@gmail.com',],
			['email' => 'contacto@tohhaa.com',],
			['email' => 'tienda29@coqueta.com.mx',],
			['email' => '',],
			['email' => 'qss.gua.andares@quiksilvermexico.com',],
			['email' => 'andaresgdl@tous.com',],
			['email' => 'tiendagdlplazaandares@cuadra.com.mx',],
			['email' => 'andares@birkenstockmexico.com',],
			['email' => 'kmoreno@obsmex.com.mx',],
			['email' => 'Byandalons@liverpool.com.mx',],
			['email' => 'mx.gdl.andares@pandorastores.net; CBusctos@pandora.net',],
			['email' => 'mgr8717@forever-21.com.mx',],
			['email' => 'sfandares@prodigy.net.mx',],
			['email' => 'ckjandares@grupoaxo.com',],
			['email' => 'bgonzalezramirez@levi.com',],
			['email' => 'andares@tudescanso.com.mx',],
			['email' => 'tkdsandares@grupoaxo.com',],
			['email' => 'bbw_andares@grupoaxo.com',],
			['email' => 'tommy_guadalajaraandares@grupoaxo.com',],
			['email' => 'b.andares.gua@benettonmex.com',],
			['email' => 'brooksbrothers_andares@grupoaxo.com',],
			['email' => 'sephora.andares@sephora.com',],
			['email' => 'vsfa_andares@grupoaxo.com',],
			['email' => 'sghmxand2@gmail.com; adanarit.cortes@gmail.com',],
			['email' => 'devlyna311@devlyn.com.mx',],
			['email' => 'guadalajara@orogoldcosmetics.com',],
			['email' => 'gncandareszapgdl@gnc.mx',],
			['email' => 'lushandares@gmail.com',],
			['email' => 'tafandaresgdl@grupoaxo.com',],
			['email' => 'timberland.andares@outlook.com',],
			['email' => 'andarestm@hotmail.com',],
			['email' => 'me_shop258@artsana.com',],
			['email' => 'onix.andares@nix.com.mx',],
			['email' => 'andares37@juguetron.mx',],
			['email' => 'andares@gonvill.com.mx',],
			['email' => 'andares@gonvill.com.mx',],
			['email' => 'andares@gonvill.com.mx',],
			['email' => 'andares@gonvill.com.mx',],
			['email' => 'andares@sevillasol.com.mx',],
			['email' => 'anda075@gameplanet.email',],
			['email' => ' contacto@fina-estampa.com',],
			['email' => 'socialpijamasgdl@gmail.com',],
			['email' => 'boutique.plazaandares@domarts.com.mx',],
			['email' => 'andaresgdl@mobo.com.mx',],
			['email' => 'andaresgdl@steren.com.mx',],
			['email' => '',],
			['email' => 'huaweiandaresgdl@mobo.com.mx',],
			['email' => 'gerenciaandares@mygtelecom.mx',],
			['email' => 'gretchen.perez@telcel.com',],
			['email' => 'spakinal@gmail.com; info@spakinal.com',],
			['email' => 'ulises.cornejo@grupocosteno.com',],
			['email' => 'mexico_suc3804@hsbc.com.mx',],
			['email' => 'egonzalez@natuzzi.com',],
			['email' => 'patriceandares@gmail.com',],
			['email' => 'fmiranda@actinver.com.mx',],
			['email' => 'inesdjs_28@hotmail.com',],
			['email' => 'aarmandog@aeromexicoandares.com',],
			['email' => 'mrojo@casegroup.com.mx',],
			['email' => 'truereligionandares@colemx.com; jesusconsulting1@gmail.com',],
			['email' => 'replayandares@colemx.com',],
			['email' => 'ma_andares@bcbg.com.mx',],
			['email' => 'ma_andares@bcbg.com.mx',],
			['email' => '',],
			['email' => 'lacasadelhabanogdl@gmail.com',],
			['email' => 'ildiavolo.andares@gmail.com',],
			['email' => 'lorena.briseno@macame.com.mx',],
			['email' => 'gerardo.cornejo@nespresso.com',],
			['email' => 'patricio.cabrera@nespresso.com; eduardo.Rodriguez1@nespresso.com',],
			['email' => 'andares@hackett.com',],
			['email' => 'andares@palzileri.com.mx',],
			['email' => 'lust_andares@grupoaxo.com',],
			['email' => 'andares@stevemadden.com.mx',],
			['email' => 'louder.andares@gv.com.mx',],
			['email' => 'andares@pronovias.es',],
			['email' => 'eduardo.torres@benandfrank.com',],
			['email' => 'talentoandares1@gmail.com',],
			['email' => 'Lamarrestaurant.Andares@gmail.com',],
			['email' => 'bkorsgdl@ph.com.mx',],
			['email' => 'coach_andares@grupoaxo.com',],
			['email' => 'Boss_Black_Store_Andares@shops.hugoboss.com',],
			['email' => 'lux1185@lux.com.mx',],
			['email' => 'is.gdl.andares@innovasport.com',],
			['email' => 'pfc_andares@pfchangsmexico.com.mx',],
			['email' => 'elizabeth.bocardo@gruposacromonte.com',],
			['email' => 'memoyanezmendez@gmail.com',],
			['email' => 'resendizt@pasteleriasmarisa.com.mx',],
			['email' => 'gte.cj.andares@stargdl.mx',],
			['email' => 'comentariospaza@hotmail.com; facturacion@tacospaza.com',],
			['email' => 'israelgarcia@freshsalads.mx',],
			['email' => '',],
			['email' => 'arbysmx02@gmail.com; albertop@ks6.com.mx',],
			['email' => 'yamile@gruposandys.com',],
			['email' => 'argentina.e.andares@gmail.com',],
			['email' => '',],
			['email' => 'gte.py.andares@stargdl.mx',],
			['email' => 'andares@cafelaflordecordoba.com',],
			['email' => 'sunfagdl@gmail.com',],
			['email' => 'albertopensado@hotmail.com',],
			['email' => 'andares@pollopepe.com.mx',],
			['email' => 'andares@qin.mx',],
			['email' => 'cedis@thesushiandsaladsco.com',],
			['email' => 'bkmx3216964@alaparrilla.com',],
			['email' => 'jonathanupnjoy@hotmail.com',],
			['email' => ' <jclariosg@televisa.com.mx>',],
			['email' => 'gdl@enigmarooms.com.mx ',],
			['email' => 'gdl@enigmarooms.com.mx ',],
			['email' => 'cvip_andares_gdl@cinepolis.com',],
		];




		$positions = [
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
			'Operación',
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
			56,
			57,
			58,
			59,
			60,
			60,
			61,
			62,
			62,
			63,
			64,
			65,
			66,
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
			112,
			112,
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
			135,
			136,
			137,
			138,
			139,
			140,
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
			177,
			178
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