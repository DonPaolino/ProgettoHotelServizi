<?php

namespace Progettohotel\GestioneHotel;

use Progettohotel\GestioneHotel\prenotazioni\PrenotazioneStandard;

class DirezioneGenerale
{
    public function creaPrenotazioneStandard(string $nomeCliente, float $prezzoBase, int $notti): PrenotazioneStandard
    {
        return new PrenotazioneStandard($nomeCliente, $prezzoBase, $notti);
    }
}

?>