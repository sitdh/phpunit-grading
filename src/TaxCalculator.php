<?php

class TaxCalculator {

    public function taxCalculator($revenue){

        $tax = '';

        if ($revenue < 0) {
            $tax = "invalid revenue";

        } else {

            if ($revenue <= 150000) {
                $tax = 0;

            } elseif ($this->revenue <= 300000) {
                $tax = ($revenue - 150000) * 0.05;

            } elseif ($revenue <= 500000) {
                $tax = 7500 + ($revenue - 300000) * 0.1;

            } elseif ($revenue <= 750000) {
                $tax = 27500 + ($revenue - 500000) * 0.15;

            } elseif ($revenue <= 1000000) {
                $tax = 65000 + ($revenue - 750000) * 0.2;

            } elseif($revenue <= 2000000) {
                $tax = 115000 + ($revenue - 1000000) * 0.25;

            } elseif($revenue <= 4000000) {
                $tax = 365000 + ($revenue - 2000000) * 0.3;

            } else {
                $tax = 965000 + ($revenue - 4000000) * 0.35;

            }
        }

        return $tax;
    }

}
