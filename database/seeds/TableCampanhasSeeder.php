<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use Faker\factory as Faker;

class TableCampanhasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$this->command->info('Aguarde, atualizando tabela de Campanhas...');        

        $faker = Faker::create('pt_BR');

        $limit = 0;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('leaf_campanhas')->insert([ //,
                'nome' => $faker->company,
                'id_user' => mt_rand(1,15),
                'dt_start' => date('Y-m-d H:i'),
                'id_city' => null,
                'id_region' => null,
                'id_country' => null,
            ]);
        }
		$this->command->info('Inserindo anúncios na Campanha.');
		
		for ($i = 0; $i < $limit; $i++) {
			$type = $faker->randomElement($array = array ('id_imagem','id_video','iframe'));
			$id_campanha = mt_rand(1,15);
			$nome_ads = $faker->words(2, true);
			$id_imagem = 'http://lorempixel.com/728/90/abstract/'.$nome_ads.$id_campanha;
			$videos = array('542', '547', '553', '588', '653');
			$id_video = $faker->randomElement($videos);
            DB::table('leaf_campanhas_ads')->insert([ //,
                'nome_ads' => $nome_ads,
                'type' => $type,
                'id_video' => $id_video,
                'id_imagem' => $id_imagem,
                'iframe' => $faker->url,
                'id_campanha' => $id_campanha,
                'id_place_ads' => mt_rand(1,6),
            ]);
        }
    }
}
