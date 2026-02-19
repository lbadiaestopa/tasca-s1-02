<?php

    function EratosthenesSieve($limit) {
        if ($limit < 2) {
            throw new Exception('Limit must be at least 2');
        }

        $sieve = array_fill(0, $limit + 1, true);
        $sieve[0] = false;
        $sieve[1] = false;

        for ($i = 2; $i < sqrt($limit); $i++) {
            if ($sieve[$i]) {
                for ($j = $i * $i; $j <= $limit; $j += $i) {
                    $sieve[$j] = false;
                }
            }
        }

        $primes = [];

        for ($i = 2; $i <= $limit; $i++) {
            if ($sieve[$i]) {
                $primes[] = $i;
            }
        }

        return $primes;
        
    }

?>