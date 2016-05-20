<?php

function isPreferred($vendorId)
{
                $legitIds = [
                  12,
                  11,
                  27,
                  93,
                  4,
                  5,
                  37,
                  6,
                  91,
                  156,
                  29,
                  71,
                  80,
                  7,
                  67,
                  133,
                  31,
                  76,
                  73,
                  89,
                  73,
                  215,
                  54,
                  182,
                  207,
                  148,
                  26,
                  221
                ];
                $index = array_search($vendorId, $legitIds);
                return is_numeric($index) ? "Yes" : "";
                // return (($index >= 0) && ($index <= count($legitIds)));
}

print_r(isPreferred(0));
print_r(isPreferred(12));


 ?>
