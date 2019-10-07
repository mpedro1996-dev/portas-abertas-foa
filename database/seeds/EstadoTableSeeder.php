<?php

use Illuminate\Database\Seeder;
use PortasAbertas\Model\Estado;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['nome'=>'Acre','uf'=>'AC','pais_id'=>'1']);
        Estado::create(['nome'=>'Alagoas','uf'=>'AL','pais_id'=>'1']);
        Estado::create(['nome'=>'Amazonas','uf'=>'AM','pais_id'=>'1']);
        Estado::create(['nome'=>'Amapá','uf'=>'AP','pais_id'=>'1']);
        Estado::create(['nome'=>'Bahia','uf'=>'BA','pais_id'=>'1']);
        Estado::create(['nome'=>'Ceará','uf'=>'CE','pais_id'=>'1']);
        Estado::create(['nome'=>'Distrito Federal','uf'=>'DF','pais_id'=>'1']);
        Estado::create(['nome'=>'Espírito Santo','uf'=>'ES','pais_id'=>'1']);
        Estado::create(['nome'=>'Goiás','uf'=>'GO','pais_id'=>'1']);
        Estado::create(['nome'=>'Maranhão','uf'=>'MA','pais_id'=>'1']);
        Estado::create(['nome'=>'Minas Gerais','uf'=>'MG','pais_id'=>'1']);
        Estado::create(['nome'=>'Mato Grosso do Sul','uf'=>'MS','pais_id'=>'1']);
        Estado::create(['nome'=>'Mato Grosso','uf'=>'MT','pais_id'=>'1']);
        Estado::create(['nome'=>'Pará','uf'=>'PA','pais_id'=>'1']);
        Estado::create(['nome'=>'Paraíba','uf'=>'PB','pais_id'=>'1']);
        Estado::create(['nome'=>'Pernambuco','uf'=>'PE','pais_id'=>'1']);
        Estado::create(['nome'=>'Piauí','uf'=>'PI','pais_id'=>'1']);
        Estado::create(['nome'=>'Paraná','uf'=>'PR','pais_id'=>'1']);
        Estado::create(['nome'=>'Rio de Janeiro','uf'=>'RJ','pais_id'=>'1']);
        Estado::create(['nome'=>'Rio Grande do Norte','uf'=>'RN','pais_id'=>'1']);
        Estado::create(['nome'=>'Rondônia','uf'=>'RO','pais_id'=>'1']);
        Estado::create(['nome'=>'Roraima','uf'=>'RR','pais_id'=>'1']);
        Estado::create(['nome'=>'Rio Grande do Sul','uf'=>'RS','pais_id'=>'1']);
        Estado::create(['nome'=>'Santa Catarina','uf'=>'SC','pais_id'=>'1']);
        Estado::create(['nome'=>'Sergipe','uf'=>'SE','pais_id'=>'1']);
        Estado::create(['nome'=>'São Paulo','uf'=>'SP','pais_id'=>'1']);
        Estado::create(['nome'=>'Tocantins','uf'=>'TO','pais_id'=>'1']);
    }
}
