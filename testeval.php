<?php
$secret = 'onnAoott0aaAhhbCCà';
$next = '';

for($i= strlen($secret)-1; $i >=0;$i--) {
    if($next === $secret{$i}) {
        print $secret{$i};
    }
    $next = $secret{$i};
}

print $secret{$i};
