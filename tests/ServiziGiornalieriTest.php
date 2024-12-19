<?php

namespace Progettohotel\GestioneHotel\test;

use PHPUnit\Framework\TestCase;
use Progettohotel\GestioneHotel\DirezioneGenerale;
use Progettohotel\GestioneHotel\servizi\ServizioColazione;
use Progettohotel\GestioneHotel\servizi\ServizioParcheggio;

class ServiziGiornalieriTest extends TestCase
{
    public function testDecorator1()
    {
        $direzione = new DirezioneGenerale();

        $servizioColazione = new ServizioColazione(10.0); // 10 euro al giorno
        $servizioParcheggio = new ServizioParcheggio(15.0); // 15 euro al giorno

        $prenotazione = $direzione->creaPrenotazioneStandard("Pippo Franco", 100.0, 5);
        $prenotazione->aggiungiServizio($servizioColazione);
        $prenotazione->aggiungiServizio($servizioParcheggio);

        $costoTotaleAtteso = (100.0 * 5) + (10.0 * 5) + (15.0 * 5); // 625 euro

        $this->assertEquals($costoTotaleAtteso, $prenotazione->calcolaCostoTotale());
    }

    

}

?>