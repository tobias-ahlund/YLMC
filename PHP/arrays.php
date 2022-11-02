<?php

declare(strict_types=1);

// Beer content array
$beers = 
[
    [
    "img" => "../images/ipa.svg" /* Soda Can Template Vectors by Vecteezy: https://www.vecteezy.com/free-vector/soda-can-template */,
    "alt" => "image of ipa beer",
    "jsFunctionEnter" => "jsFunctionEnterBeer1();",
    "jsFunctionLeave" => "jsFunctionLeaveBeer1();",
    "id" => "beer1",
    "type" => "IPA",
    "ingredients" => "Barley malt",
    "abv" => "7.0%",
    "availability" => "Standard selection"
    ],
    [
    "img" => "../images/lager.svg",
    "alt" => "image of lager beer",
    "jsFunctionEnter" => "jsFunctionEnterBeer2();",
    "jsFunctionLeave" => "jsFunctionLeaveBeer2();",
    "id" => "beer2",
    "type" => "Lager",
    "ingredients" => "Barley malt, hops, wheat",
    "abv" => "5.0%",
    "availability" => "Coming soon"
    ],
    [
    "img" => "../images/porter.svg",
    "alt" => "image of porter beer",
    "jsFunctionEnter" => "jsFunctionEnterBeer3();",
    "jsFunctionLeave" => "jsFunctionEnterBeer3();",
    "id" => "beer3",
    "type" => "Porter",
    "ingredients" => "Barley malt, oats",
    "abv" => "5.5%",
    "availability" => "Limited edition"
    ],
];

// "Abous us" text array
$aboutUsText = [
    array (
        
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras magna ligula, ultricies et leo et, sagittis scelerisque arcu. Quisque auctor arcu at enim dapibus, quis efficitur eros porttitor. Vivamus rutrum augue ac libero scelerisque sagittis. Mauris id faucibus tortor. Donec a dictum mauris. Pellentesque ut bibendum leo. Vestibulum ornare a felis sit amet elementum. Pellentesque a nulla nec justo aliquet aliquet. Maecenas at commodo nisl, quis fermentum urna. Suspendisse ut lorem ac lacus laoreet ornare. Phasellus nulla metus, interdum in sapien nec, elementum pretium eros. Nulla tincidunt, metus at convallis pretium, lorem urna porta justo, non aliquet dui ex vel sem.",
        
    "Duis consectetur tincidunt purus fermentum mollis. Vivamus maximus tortor turpis, quis euismod ex venenatis id. Morbi semper enim porttitor accumsan dignissim. Sed vulputate placerat neque, nec mattis mi cursus sit amet. Maecenas ligula est, molestie id urna a, iaculis porta lorem. Maecenas nisi odio, pellentesque sit amet blandit vitae, posuere sed erat. Quisque at justo hendrerit, viverra diam id, congue sem.",
        
    "Proin maximus ipsum auctor nulla lobortis scelerisque sed at diam. Fusce nisi augue, tempor sed dolor ac, eleifend semper magna. Curabitur eget quam in nibh fermentum fermentum. Mauris lacinia volutpat tincidunt. Nulla velit magna, posuere iaculis eleifend sed, tempor in nunc. Nullam eu dictum urna. Cras in imperdiet libero."
        
    ),
    
    [
    "Etiam sit amet auctor enim, in interdum tortor"
    ]

];