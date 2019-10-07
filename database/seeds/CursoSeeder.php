<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \PortasAbertas\Model\Curso::create(['nome'=>'ADMINISTRAÇÃO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'CIÊNCIAS BIOLÓGICAS - BACHARELADO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'CIÊNCIAS BIOLÓGICAS - LICENCIATURA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'CIÊNCIAS CONTÁBEIS']);
        \PortasAbertas\Model\Curso::create(['nome'=>'DESIGN']);
        \PortasAbertas\Model\Curso::create(['nome'=>'DIREITO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'EDUCAÇÃO FÍSICA - BACHARELADO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'EDUCAÇÃO FÍSICA - LICENCIATURA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENFERMAGEM']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENGENHARIA AMBIENTAL']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENGENHARIA CIVIL']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENGENHARIA ELÉTRICA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENGENHARIA MECÂNICA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ENGENHARIA DE PRODUÇÃO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'JORNALISMO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'MEDICINA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'NUTRIÇÃO']);
        \PortasAbertas\Model\Curso::create(['nome'=>'ODONTOLOGIA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'PUBLICIDADE E PROPAGANDA']);
        \PortasAbertas\Model\Curso::create(['nome'=>'SERVIÇO SOCIAL']);
        \PortasAbertas\Model\Curso::create(['nome'=>'SISTEMAS DE INFORMAÇÃO']);    }
}
