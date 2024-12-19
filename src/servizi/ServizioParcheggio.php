<?php

namespace Progettohotel\GestioneHotel\servizi;

use Progettohotel\GestioneHotel\contratti\ContrattoPrenotazioneGenerale;

class ServizioParcheggio implements ContrattoPrenotazioneGenerale
{
    private float $costoGiornaliero;

    public function __construct(float $costoGiornaliero)
    {
        $this->costoGiornaliero = $costoGiornaliero;
    }

    public function calcolaCosto(int $notti): float
    {
        return $this->costoGiornaliero * $notti;
    }
}

?>