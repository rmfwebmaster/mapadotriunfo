<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('perguntas')->insert([
//            'pilar_id' => 1,
//            'pergunta' => 'Você sabe quais são suas crenças, seus valores e pontos a melhorar? ',
//            'ordem' => 1,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);
//
//        DB::table('perguntas')->insert([
//            'pilar_id' => 1,
//            'pergunta' => 'Quanto vivo em harmonia com minhas crenças e valores espirituais?',
//            'ordem' => 2,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);


        DB::table('perguntas')->insert([
            'pilar_id' => 1,
            'pergunta' => 'Dedico tempo de qualidade em família?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 1,
            'pergunta' => 'Consigo desenvolver um diálogo aberto com a minha família?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 2,
//            'pergunta' => 'O quanto inspiro confiança e apoio múßtuo?',
//            'ordem' => 3,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);
//
//        DB::table('perguntas')->insert([
//            'pilar_id' => 2,
//            'pergunta' => 'O quanto participo de festas e eventos de família?',
//            'ordem' => 4,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 1,
            'pergunta' => 'As pessoas da minha família se sentem amadas por mim e eu por elas?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);



        DB::table('perguntas')->insert([
            'pilar_id' => 2,
            'pergunta' => 'Faço atividades físicas e cuido da minha alimentação regularmente?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 2,
            'pergunta' => 'Faço check-up e exames de rotina com frequência?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 3,
//            'pergunta' => 'Quanto cuido da minha alimentação?',
//            'ordem' => 3,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 2,
            'pergunta' => 'Controlo o meu nível de stress?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 3,
//            'pergunta' => 'Tenho horas de sono de qualidade?',
//            'ordem' => 5,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);



//        DB::table('perguntas')->insert([
//            'pilar_id' => 4,
//            'pergunta' => 'O quanto sei usar o dinheiro que ganho?',
//            'ordem' => 1,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 3,
            'pergunta' => 'Controlo meus impulsos de gastar dinheiro?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 3,
            'pergunta' => 'Consigo me planejar financeiramente para conquistar objetivos de médio e longo prazo?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 3,
            'pergunta' => 'Emprego o dinheiro para trabalhar a meu favor?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 4,
//            'pergunta' => 'Quanto considero saudável minha relação com o dinheiro?',
//            'ordem' => 5,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);



        DB::table('perguntas')->insert([
            'pilar_id' => 4,
            'pergunta' => 'Sinto-me realizado com o meu trabalho?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 5,
//            'pergunta' => 'Quanto de energia estou dedicando à minha carreira?',
//            'ordem' => 2,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 4,
            'pergunta' => 'Meu trabalho está alinhado com os meus objetivos e ideais de vida?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 4,
            'pergunta' => 'Meu trabalho utiliza minhas potencialidades e talentos?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 5,
//            'pergunta' => 'Quanto faço planejamento do que espero da minha carreira?',
//            'ordem' => 5,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);




//        DB::table('perguntas')->insert([
//            'pilar_id' => 6,
//            'pergunta' => 'Quanto alimento minha mente com leituras?',
//            'ordem' => 1,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 5,
            'pergunta' => 'Aplico meus conhecimentos intelectuais para gerar algum impacto positivo na sociedade?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 6,
//            'pergunta' => 'Quanto uso meus conhecimentos?',
//            'ordem' => 3,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 5,
            'pergunta' => 'Compartilho com outros meus conhecimentos?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 5,
            'pergunta' => 'Invisto tempo e recursos para adquirir conhecimentos?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);




//        DB::table('perguntas')->insert([
//            'pilar_id' => 7,
//            'pergunta' => 'O quanto estou satisfeito com minhas relações amorosas?',
//            'ordem' => 1,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 7,
//            'pergunta' => 'O quanto sou honesto em me posicionar quanto às minhas expectativas no relacionamento?',
//            'ordem' => 2,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 6,
            'pergunta' => 'Consigo entrar em relações amorosas saudáveis em que o outro também satisfaça minhas necessidades?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 6,
            'pergunta' => 'Tenho crescimento pessoal a partir de um relacionamento amoroso?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 6,
            'pergunta' => 'Estou satisfeito com meu relacionamento amoroso, ou com o fato de estar sozinho, se estiver?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);



        DB::table('perguntas')->insert([
            'pilar_id' => 7,
            'pergunta' => 'Tenho ou cultivo amizades profundas e confiáveis?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 7,
            'pergunta' => 'Correspondo e sou correspondido em minhas amizades?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 7,
            'pergunta' => 'Consigo me colocar no lugar do outro em minhas amizades (ter empatia)?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 8,
//            'pergunta' => 'Quanto participo de festas e reuniões de amigos?',
//            'ordem' => 4,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);

//        DB::table('perguntas')->insert([
//            'pilar_id' => 8,
//            'pergunta' => 'Quanto encontro meus amigos regularmente?',
//            'ordem' => 5,
//            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
//        ]);


        DB::table('perguntas')->insert([
            'pilar_id' => 8,
            'pergunta' => 'Sinto que existe uma força maior que influencia minha vida?',
            'ordem' => 1,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 8,
            'pergunta' => 'Desenvolvo alguma prática que considero espiritual, mesmo que não seja ligada a alguma religião?',
            'ordem' => 2,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('perguntas')->insert([
            'pilar_id' => 8,
            'pergunta' => 'Meu desenvolvimento espiritual promove impacto positivo na vida dos outros?',
            'ordem' => 3,
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);
    }
}
