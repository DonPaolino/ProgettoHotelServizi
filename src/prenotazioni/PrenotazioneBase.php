<?php

namespace Progettohotel\GestioneHotel\prenotazioni;

use Progettohotel\GestioneHotel\contratti\ContrattoPrenotazioneGenerale;


abstract class PrenotazioneBase
{
    protected string $nomeCliente;
    protected float $prezzoBase;
    protected int $notti;
    protected array $servizi = [];

    public function __construct(string $nomeCliente, float $prezzoBase, int $notti)
    {
        $this->nomeCliente = $nomeCliente;
        $this->prezzoBase = $prezzoBase;
        $this->notti = $notti;
    }

    public function aggiungiServizio(ContrattoPrenotazioneGenerale $servizio)
    {
        $this->servizi[] = $servizio;
    }

    public function calcolaCostoTotale(): float
    {
        $costoBase = $this->prezzoBase * $this->notti;
        $costoServizi = 0.0;

        foreach ($this->servizi as $servizio) {
            $costoServizi += $servizio->calcolaCosto($this->notti);
        }

        return $costoBase + $costoServizi;
    }
}

?>