<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Viareggio',
                'stazione_arrivo' => 'Lucca',
                'orario_partenza' => '12:30',
                'orario_arrivo' => '12:45',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Viareggio',
                'stazione_arrivo' => 'Lucca',
                'orario_partenza' => '16:30',
                'orario_arrivo' => '18:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => true,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Roma',
                'stazione_arrivo' => 'Milano',
                'orario_partenza' => '06:37:00',
                'orario_arrivo' => '12:45:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => true,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Napoli',
                'stazione_arrivo' => 'Roma',
                'orario_partenza' => '12:00',
                'orario_arrivo' => '14:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => true,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Napoli',
                'stazione_arrivo' => 'Milano',
                'orario_partenza' => '07:30',
                'orario_arrivo' => '13:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Torino',
                'stazione_arrivo' => 'Ferrara',
                'orario_partenza' => '16:30:00',
                'orario_arrivo' => '18:00:00',
                'codice_treno' => rand(10000, 99999),
                'numero_carrozze' => rand(4, 10),
                'in_orario' => false,
                'cancellato' => true
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            if (isset($train['cancellato']))
                $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}
