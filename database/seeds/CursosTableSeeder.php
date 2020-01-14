<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cursos')->insert([
            'pilar_id' => 1,
            'ordem' => 1,
            'url_image' => 'familiar_1.jpg',
            'titulo' => 'Emoções em Família por Tonia Casarin',
            'descricao' => 'Feito para atender às necessidades de pais, mães e familiares, que querem um ambiente emocionalmente saudável em família. Um lar que ensina a crianças e adultos a desenvolver competências socioemocionais importantes para crescer e viver em sociedade.',
            'link' => 'http://bit.ly/EmocoesEmFamiliaToniaCasarin',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 1,
            'ordem' => 2,
            'url_image' => 'familiar_2.jpg',
            'titulo' => 'Segredos do sucesso no casamento',
            'descricao' => 'Imagine como seria poder ter um casamento feliz, alegre, onde existe colaboração entre casal, onde os dois trabalham em prol do mesmo objetivo. Um lar onde reina a paz, uma casa repleta de gestos de carinho e  um relacionamento repleto de palavras de amor?',
            'link' => 'http://bit.ly/SegredosSucessoCasamento',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 1,
            'ordem' => 3,
            'url_image' => 'familiar_3.jpg',
            'titulo' => 'Inseparáveis',
            'descricao' => 'Qual o primeiro passo para restaurar ou aprimorar o seu casamento. Em 21 dias, você pode transformar o seu relacionamento e viver uma vida abundante. Seja também um inseparável!',
            'link' => 'http://bit.ly/RelacionamentosInseparaveis',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 1,
            'ordem' => 4,
            'url_image' => 'familiar_4.jpg',
            'titulo' => 'Mentoria de Pais',
            'descricao' => 'Descubra o método que milhares de pais estão usando para eliminar as teimosias, gritarias, brigas e falta de limites dos filhos, transformando a relação familiar em até 21 dias.',
            'link' => 'http://bit.ly/LimitesSemCulpaPais',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 1,
            'ordem' => 5,
            'url_image' => 'familiar_5.jpg',
            'titulo' => 'Método Anti-divórcio 3.0',
            'descricao' => 'De brigas pesadas ao amor ardente. De um relacionamento mais ou menos para o excelente. Curso para casais em crise. Busque o relacionamento extraordinário.',
            'link' => 'http://bit.ly/MetodoAntiDivorcio30',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);






        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 1,
            'url_image' => 'saude_1.jpg',
            'titulo' => 'Emagreça mudando a sua mente',
            'descricao' => 'Inteligência Fit é uma metodologia que usa ferramentas de coach, para educar pessoas a praticar o equilíbrio saudável entre mente e corpo. Controlando a alimentação, praticando exercícios e desenvolvendo maturidade sobre desejos e compulsões.',
            'link' => 'http://bit.ly/InteligenciaFit',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 2,
            'url_image' => 'saude_2.jpg',
            'titulo' => 'Desafio de 21 dias da Meditação',
            'descricao' => 'Aprenda a meditar e usar mindfulness para manejar o estresse e a ansiedade, controlando a Mente e o equilíbrio Emocional.',
            'link' => 'http://bit.ly/Desafio21DiasMeditacao',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 3,
            'url_image' => 'saude_3.jpg',
            'titulo' => 'Ser saudável sem sofrer',
            'descricao' => 'É bastante comum que as pessoas associem vida saudável com sofrimento, mas eu sempre ensino que é possível sim ter um estilo de vida saudável e não sofrer com isso.',
            'link' => 'http://bit.ly/SaudavelSemSofrer',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 4,
            'url_image' => 'saude_4.jpg',
            'titulo' => 'Programa Mudando para Emagrecer',
            'descricao' => 'Você já percebeu que às vezes parece que sabe exatamente o que precisa fazer para emagrecer, mas não consegue? Este programa foi criado pensando em você!',
            'link' => 'http://bit.ly/ProgramaMudandoParaEmagrecer',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 5,
            'url_image' => 'saude_5.jpg',
            'titulo' => 'YouFit',
            'descricao' => 'Programa completo de exercícios criado para queimar a gordura corporal em um curto espaço de tempo. Com exercícios de alta intensidade, você não precisará de nada além da sua força de vontade e de 10 minutos do seu dia.',
            'link' => 'http://bit.ly/YouFitTreinos',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 6,
            'url_image' => 'saude_6.jpg',
            'titulo' => 'Iniciando nos Treinos com Peso Corporal',
            'descricao' => 'Deseja obter definição, força e saúde treinando em casa mas não sabe como começar? Preparamos pra você um livro digital para iniciantes com exemplos de treinos para fazer em casa.',
            'link' => 'http://bit.ly/BioLiftCasa',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 7,
            'url_image' => 'saude_7.jpg',
            'titulo' => 'Detox de 3 Dias para Desinchar o Corpo',
            'descricao' => 'Passo a passo simples e prático para te ajudar a desinchar o seu corpo, eliminando a retenção de líquidos e limpando o seu Organismo. Além de disso, você também poderá perder alguns quilinhos durante o processo que dura Apenas 3 Dias.',
            'link' => 'http://bit.ly/Detox3DiasCorpoDesinchar',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 2,
            'ordem' => 8,
            'url_image' => 'saude_8.jpg',
            'titulo' => 'Dieta de 21 dias',
            'descricao' => 'Método Inovador e Cientificamente Comprovado para VOCÊ perder de 5 a 10 quilos de Gordura Corporal em Apenas 21 dias - 100% Garantido. Tem Ajudado Centenas de Pessoas a atingir seus objetivos de Perda de Peso - mais rápido do que qualquer outra dieta que existe no mercado.',
            'link' => 'http://bit.ly/QueroEmagrecerEm21DiasAgora',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);





        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 1,
            'url_image' => 'financeiro_1.jpg',
            'titulo' => 'Administração Financeira Familiar + ebook',
            'descricao' => 'Aprenda a gerir adequadamente as suas finanças pessoais. Com este curso você descobrirá qual o seu perfil financeiro e aprenderá a encontrar os pontos fortes e fracos de sua administração financeira e como tratá-los.',
            'link' => 'http://bit.ly/AdmFinancFamiliar',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 2,
            'url_image' => 'financeiro_2.jpg',
            'titulo' => 'Investidor de Valor',
            'descricao' => 'Curso completo para o Investidor Iniciante. - Mentalidade de Investidor - Organização de Orçamento - Reserva de Emergência - Conceitos sobre Mercados Financeiro - Produtos de Investimento - Tributação - Montando sua Carteira - Investindo na Prática.',
            'link' => 'http://bit.ly/InvestidorDeValor',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 3,
            'url_image' => 'financeiro_3.jpg',
            'titulo' => 'Viver Sem Dívidas',
            'descricao' => 'Neste curso o consultor e coach financeiro Julio Santos desenvolveu uma metodologia que ensina, de forma prática, o passo a passo para eliminar dívidas definitivamente da sua vida.',
            'link' => 'http://bit.ly/CursoViverSemDividas',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 4,
            'url_image' => 'financeiro_4.jpg',
            'titulo' => 'Educação Financeira para Leigos',
            'descricao' => 'Curso 30% Teórico e 70% Prático para você aprender a lidar com suas finanças pessoas, descobrir técnicas financeiras, entender o mercado financeiro e seus produtos financeiros. Serão 9 Módulos.',
            'link' => 'http://bit.ly/EducacaoFinanceiraLeigos',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 5,
            'url_image' => 'financeiro_5.jpg',
            'titulo' => 'Finanças Pessoais com Rogério Favalli',
            'descricao' => 'Muitos brasileiros estão no vermelho financeiramente e não veem a hora de sair dessa situação. Neste curso o autor apresenta técnicas para você gerenciar e projetar suas finanças.',
            'link' => 'http://bit.ly/FinancasPessoaisFavalli',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 3,
            'ordem' => 6,
            'url_image' => 'financeiro_6.jpg',
            'titulo' => 'Educação Financeira para Mulheres',
            'descricao' => 'O Curso ensina diversas técnicas de como realizar o Planejamento Pessoal, como atingir seus objetivos financeiros e como realizar e controlar um orçamento financeiro pessoal.',
            'link' => 'http://bit.ly/EducacaoFinanceiraMulheres',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);





        DB::table('cursos')->insert([
            'pilar_id' => 4,
            'ordem' => 1,
            'url_image' => 'profissional_1.jpg',
            'titulo' => 'Como iniciar uma carreira de sucesso',
            'descricao' => 'Você aprenderá a realizar o planejamento passo a passo, com estratégias e dicas que levarão você a vencer as barreiras e dificuldades de iniciar uma carreira, e seguir rumo ao sucesso profissional.',
            'link' => 'http://bit.ly/CarreiraDeAguia',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 4,
            'ordem' => 2,
            'url_image' => 'profissional_2.jpg',
            'titulo' => 'As principais dicas para escolher a sua profissão',
            'descricao' => 'Descubra os pontos essenciais para fazer uma (re)escolha profissional de forma mais tranquila. Ele foi construído por psicólogos e orientadores profissionais qualificados, para quem está totalmente perdido, para quem está com algumas dúvidas, e para quem já se decidiu, mas quer repensar a escolha.',
            'link' => 'http://bit.ly/EscolherSuaProfissao',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 4,
            'ordem' => 3,
            'url_image' => 'profissional_3.jpg',
            'titulo' => 'Reinvente sua carreira',
            'descricao' => 'Para quem não está feliz com o seu trabalho e precisa de novas oportunidades, é para quem quer ficar de bem com a carreira, mas não está sabendo para onde ir.',
            'link' => 'http://bit.ly/ReinventeSuaCarreira',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 4,
            'ordem' => 4,
            'url_image' => 'profissional_4.jpg',
            'titulo' => 'Alinhando e construindo a sua carreira',
            'descricao' => 'Oficina de carreira baseada em Neurociência, Neurolinguística e Self Coaching, formatada de forma muito especial para você que está em busca de construir uma carreira, alavancá-la ou alinhá-la aos seu propósito e objetivos.',
            'link' => 'http://bit.ly/CarerrAlignment',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);





        DB::table('cursos')->insert([
            'pilar_id' => 5,
            'ordem' => 1,
            'url_image' => 'intelectual_1.jpg',
            'titulo' => 'E-book disciplina inabalável',
            'descricao' => 'Acordar todos os dias com uma motivação excelente, independentemente das circunstâncias. Eliminar definitivamente a procrastinação, a falta de foco, a preguiça e o desânimo.',
            'link' => 'http://bit.ly/BookDisciplinaInabalavel',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

       DB::table('cursos')->insert([
            'pilar_id' => 5,
            'ordem' => 2,
            'url_image' => 'intelectual_2.jpg',
            'titulo' => 'AtivaMente',
            'descricao' => 'Você entrará em uma imersão de ativação mental que te levará a uma mudança de mentalidade proporcionando um caminho para o seu objetivo por meio do pensamento da ação positiva.',
            'link' => 'http://bit.ly/CursoAtivaMente',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 5,
            'ordem' => 3,
            'url_image' => 'intelectual_3.jpg',
            'titulo' => 'PNL Express',
            'descricao' => 'O Néctar na área de inteligencia emocional, a chave do sucesso das pessoas bem-sucedidas. Como eliminar os seus sabotadores internos. Como quebrar as crenças limitantes.',
            'link' => 'http://bit.ly/PnlExpress',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

       DB::table('cursos')->insert([
            'pilar_id' => 5,
            'ordem' => 4,
            'url_image' => 'intelectual_4.jpg',
            'titulo' => 'Como ler mais, mais rápido e com mais compreensão',
            'descricao' => 'Esse é o único que ajuda a criar o hábito da leitura, aumentar a velocidade, compreender bem e ainda memorizar o conteúdo.',
            'link' => 'http://bit.ly/ComoLerMaisRapidoCompreensao',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 5,
            'ordem' => 5,
            'url_image' => 'intelectual_5.jpg',
            'titulo' => 'Mapas mentais no piloto automoático',
            'descricao' => 'Passo a passo de como fazer e estudar por meio da ferramenta Mapas Mentais, técnica de estudo mais eficaz para o estudo de alta performance e aprendizagem acelerada.',
            'link' => 'http://bit.ly/MapasMentaisAutomatico',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);





        DB::table('cursos')->insert([
            'pilar_id' => 6,
            'ordem' => 1,
            'url_image' => 'amor_1.jpg',
            'titulo' => '52 receitas para um relacionamento mais feliz e duradouro',
            'descricao' => 'Você que quer ter um relacionamento cada vez mais sólido, com uma estrutura inabalável, extremamente seguro e pautado em muita amizade e compreensão.',
            'link' => 'http://bit.ly/52ReceitasRelacionamento',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 6,
            'ordem' => 2,
            'url_image' => 'amor_2.jpg',
            'titulo' => 'Nova chande para o amor',
            'descricao' => 'Como esquecer um amor que não deu certo e recomeçar sua vida amorosa, encontrando um novo parceiro que seja mais compatível com sua personalidade e corresponda às suas expectativas.',
            'link' => 'http://bit.ly/NovaChanceAmor',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 6,
            'ordem' => 3,
            'url_image' => 'amor_3.jpg',
            'titulo' => 'Supere a dor do término',
            'descricao' => 'Saia deste ciclo e entenda de uma vez por todas o que é o término e como identificar sua carência afetiva ou sua dependência emocional.',
            'link' => 'http://bit.ly/SupereDorTermino',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 6,
            'ordem' => 4,
            'url_image' => 'amor_4.jpg',
            'titulo' => 'Dependência emocional, tô fora',
            'descricao' => 'Mergulhe nas suas questões para descobrir seu padrão repetitivo, se redescobrir como um ser que pode se amar e aprender a se relacionar melhor.',
            'link' => 'http://bit.ly/DependenciaEmocionalFora',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);





        DB::table('cursos')->insert([
            'pilar_id' => 7,
            'ordem' => 1,
            'url_image' => 'social_1.jpg',
            'titulo' => 'Compreenda as pessoas e desenvolva melhores relacionamentos',
            'descricao' => 'Obter todo o suporte e orientação que você precisa para ser um sucesso nas amizades! Um dos recursos mais valiosos do mundo quando se trata de resolver ter melhores relacionamentos.',
            'link' => 'http://bit.ly/CompreendaPessoas',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

       DB::table('cursos')->insert([
            'pilar_id' => 7,
            'ordem' => 2,
            'url_image' => 'social_2.jpg',
            'titulo' => 'A Arte de Fazer Amigos',
            'descricao' => 'Cada vez mais vejo pessoas que não conseguem se enturmar por não conseguir dar os primeiros passos para iniciar uma nova amizade. Este e-book vai ajudar você a conquistar verdadeiros aliados na sua vida.',
            'link' => 'http://bit.ly/ArteFazerAmigos',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

       DB::table('cursos')->insert([
            'pilar_id' => 7,
            'ordem' => 3,
            'url_image' => 'social_3.jpg',
            'titulo' => 'A Fórmula da Amizade (E-Book + Áudio Book)',
            'descricao' => 'Neste E-Book você entenderá 7 segredos usados, testados e aprovados por cientistas comportamentais para fazer amigos.',
            'link' => 'http://bit.ly/FormulaAmizade',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);






        DB::table('cursos')->insert([
            'pilar_id' => 8,
            'ordem' => 1,
            'url_image' => 'espiritual_1.jpg',
            'titulo' => 'E-book Salvo Conduto',
            'descricao' => 'Muitos caminhos têm sido propostos para as pessoas, como alternativas de solução para as suas angústias. No entanto, como se pode deduzir dos elevados índices de instabilidade emocional, relacional e espiritual, dos alarmantes índices de ansiedade e depressão, tais propostas de soluções não têm gerado resultados satisfatórios.',
            'link' => 'http://bit.ly/SalvoConduto',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 8,
            'ordem' => 2,
            'url_image' => 'espiritual_2.jpg',
            'titulo' => 'Curso transformação - Pr. Antonio Jr',
            'descricao' => 'Passos necessários para você transformar a sua vida e estar mais próximo de Deus. Acredite e tenha sua vida transformada na área espiritual, sentimental e financeira.',
            'link' => 'http://bit.ly/TransformacaoAntonioJr',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 8,
            'ordem' => 3,
            'url_image' => 'espiritual_3.jpg',
            'titulo' => 'Gratitude life',
            'descricao' => 'Estratégias para se viver com gratidão numa base regular, possibilitando assim a percepção e o acesso a possibilidades que não podem ser vistas ou percebidas por uma pessoa dominada pela ingratidão, pela falta de fé e pela falta de perdão.',
            'link' => 'http://bit.ly/MetodoGratitudeLife',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('cursos')->insert([
            'pilar_id' => 8,
            'ordem' => 4,
            'url_image' => 'espiritual_4.jpg',
            'titulo' => 'Lei da Atração na Prática',
            'descricao' => 'O guia mais importante para você atrair tudo o que precisa na vida. “Hoje… Mude sua vida e viva seus sonhos usando a lei final do universo!” Descubra os segredos para atrair seus desejos e obter tudo o que você sempre sonhou!',
            'link' => 'http://bit.ly/BookLeiDaAtracaoNaPratica',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

    }
}
