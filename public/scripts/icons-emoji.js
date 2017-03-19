/**
 * @author Batch Themes Ltd.
 */
(function() {
    'use strict';

    $(function() {

        var config = $.localStorage.get('config');
        $('body').attr('data-layout', config.layout);
        $('body').attr('data-palette', config.theme);

        var tpl = '<div class="col-xs-12 col-md-4 col-xl-3">';
        tpl += '<div class="icon-example emoji-example">';
        tpl += '<i class="twa twa-3x {icon}"></i>';
        tpl += '<span class="icon-class">{icon}</span>';
        tpl += '</div>';
        tpl += '</div>';

        var icons = [
            'twa-smile',
            'twa-laughing',
            'twa-blush',
            'twa-smiley',
            'twa-relaxed',
            'twa-smirk',
            'twa-heart-eyes',
            'twa-kissing-heart',
            'twa-kissing-closed-eyes',
            'twa-flushed',
            'twa-relieved',
            'twa-satisfied',
            'twa-grin',
            'twa-wink',
            'twa-stuck-out-tongue-winking-eye',
            'twa-stuck-out-tongue-closed-eyes',
            'twa-grinning',
            'twa-kissing',
            'twa-kissing-smiling-eyes',
            'twa-stuck-out-tongue',
            'twa-sleeping',
            'twa-worried',
            'twa-frowning',
            'twa-anguished',
            'twa-open-mouth',
            'twa-grimacing',
            'twa-confused',
            'twa-hushed',
            'twa-expressionless',
            'twa-unamused',
            'twa-sweat-smile',
            'twa-sweat',
            'twa-weary',
            'twa-pensive',
            'twa-disappointed',
            'twa-confounded',
            'twa-fearful',
            'twa-cold-sweat',
            'twa-persevere',
            'twa-cry',
            'twa-sob',
            'twa-joy',
            'twa-astonished',
            'twa-scream',
            'twa-tired-face',
            'twa-angry',
            'twa-rage',
            'twa-triumph',
            'twa-sleepy',
            'twa-yum',
            'twa-mask',
            'twa-sunglasses',
            'twa-dizzy-face',
            'twa-imp',
            'twa-smiling-imp',
            'twa-neutral-face',
            'twa-no-mouth',
            'twa-innocent',
            'twa-alien',
            'twa-yellow-heart',
            'twa-blue-heart',
            'twa-purple-heart',
            'twa-heart',
            'twa-green-heart',
            'twa-broken-heart',
            'twa-heartbeat',
            'twa-heartpulse',
            'twa-two-hearts',
            'twa-revolving-hearts',
            'twa-cupid',
            'twa-sparkling-heart',
            'twa-sparkles',
            'twa-star',
            'twa-star2',
            'twa-dizzy',
            'twa-boom',
            'twa-anger',
            'twa-exclamation',
            'twa-question',
            'twa-grey-exclamation',
            'twa-grey-question',
            'twa-zzz',
            'twa-dash',
            'twa-sweat-drops',
            'twa-notes',
            'twa-musical-note',
            'twa-fire',
            'twa-poop',
            'twa-thumbsup',
            'twa-thumbsdown',
            'twa-ok-hand',
            'twa-punch',
            'twa-fist',
            'twa-v',
            'twa-wave',
            'twa-hand',
            'twa-open-hands',
            'twa-point-up',
            'twa-point-down',
            'twa-point-left',
            'twa-point-right',
            'twa-raised-hands',
            'twa-pray',
            'twa-point-up-2',
            'twa-clap',
            'twa-muscle',
            'twa-walking',
            'twa-runner',
            'twa-couple',
            'twa-family',
            'twa-two-men-holding-hands',
            'twa-two-women-holding-hands',
            'twa-dancer',
            'twa-dancers',
            'twa-ok-woman',
            'twa-no-good',
            'twa-information-desk-person',
            'twa-raised-hand',
            'twa-bride-with-veil',
            'twa-person-with-pouting-face',
            'twa-person-frowning',
            'twa-bow',
            'twa-couplekiss',
            'twa-couple-with-heart',
            'twa-massage',
            'twa-haircut',
            'twa-nail-care',
            'twa-boy',
            'twa-girl',
            'twa-woman',
            'twa-man',
            'twa-baby',
            'twa-older-woman',
            'twa-older-man',
            'twa-person-with-blond-hair',
            'twa-man-with-gua-pi-mao',
            'twa-man-with-turban',
            'twa-construction-worker',
            'twa-cop',
            'twa-angel',
            'twa-princess',
            'twa-smiley-cat',
            'twa-smile-cat',
            'twa-heart-eyes-cat',
            'twa-kissing-cat',
            'twa-smirk-cat',
            'twa-scream-cat',
            'twa-crying-cat-face',
            'twa-joy-cat',
            'twa-pouting-cat',
            'twa-japanese-ogre',
            'twa-japanese-goblin',
            'twa-see-no-evil',
            'twa-hear-no-evil',
            'twa-speak-no-evil',
            'twa-guardsman',
            'twa-skull',
            'twa-feet',
            'twa-lips',
            'twa-kiss',
            'twa-droplet',
            'twa-ear',
            'twa-eyes',
            'twa-nose',
            'twa-tongue',
            'twa-love-letter',
            'twa-bust-in-silhouette',
            'twa-busts-in-silhouette',
            'twa-speech-balloon',
            'twa-thought-balloon',
            'twa-sunny',
            'twa-umbrella',
            'twa-cloud',
            'twa-snowflake',
            'twa-snowman',
            'twa-zap',
            'twa-cyclone',
            'twa-foggy',
            'twa-ocean',
            'twa-cat',
            'twa-dog',
            'twa-mouse',
            'twa-hamster',
            'twa-rabbit',
            'twa-wolf',
            'twa-frog',
            'twa-tiger',
            'twa-koala',
            'twa-bear',
            'twa-pig',
            'twa-pig-nose',
            'twa-cow',
            'twa-boar',
            'twa-monkey-face',
            'twa-monkey',
            'twa-horse',
            'twa-racehorse',
            'twa-camel',
            'twa-sheep',
            'twa-elephant',
            'twa-panda-face',
            'twa-snake',
            'twa-bird',
            'twa-baby-chick',
            'twa-hatched-chick',
            'twa-hatching-chick',
            'twa-chicken',
            'twa-penguin',
            'twa-turtle',
            'twa-bug',
            'twa-honeybee',
            'twa-ant',
            'twa-beetle',
            'twa-snail',
            'twa-octopus',
            'twa-tropical-fish',
            'twa-fish',
            'twa-whale',
            'twa-whale2',
            'twa-dolphin',
            'twa-cow2',
            'twa-ram',
            'twa-rat',
            'twa-water-buffalo',
            'twa-tiger2',
            'twa-rabbit2',
            'twa-dragon',
            'twa-goat',
            'twa-rooster',
            'twa-dog2',
            'twa-pig2',
            'twa-mouse2',
            'twa-ox',
            'twa-dragon-face',
            'twa-blowfish',
            'twa-crocodile',
            'twa-dromedary-camel',
            'twa-leopard',
            'twa-cat2',
            'twa-poodle',
            'twa-paw-prints',
            'twa-bouquet',
            'twa-cherry-blossom',
            'twa-tulip',
            'twa-four-leaf-clover',
            'twa-rose',
            'twa-sunflower',
            'twa-hibiscus',
            'twa-maple-leaf',
            'twa-leaves',
            'twa-fallen-leaf',
            'twa-herb',
            'twa-mushroom',
            'twa-cactus',
            'twa-palm-tree',
            'twa-evergreen-tree',
            'twa-deciduous-tree',
            'twa-chestnut',
            'twa-seedling',
            'twa-blossom',
            'twa-ear-of-rice',
            'twa-shell',
            'twa-globe-with-meridians',
            'twa-sun-with-face',
            'twa-full-moon-with-face',
            'twa-new-moon-with-face',
            'twa-new-moon',
            'twa-waxing-crescent-moon',
            'twa-first-quarter-moon',
            'twa-waxing-gibbous-moon',
            'twa-full-moon',
            'twa-waning-gibbous-moon',
            'twa-last-quarter-moon',
            'twa-waning-crescent-moon',
            'twa-last-quarter-moon-with-face',
            'twa-first-quarter-moon-with-face',
            'twa-moon',
            'twa-earth-africa',
            'twa-earth-americas',
            'twa-earth-asia',
            'twa-volcano',
            'twa-milky-way',
            'twa-partly-sunny',
            'twa-bamboo',
            'twa-gift-heart',
            'twa-dolls',
            'twa-school-satchel',
            'twa-mortar-board',
            'twa-flags',
            'twa-fireworks',
            'twa-sparkler',
            'twa-wind-chime',
            'twa-rice-scene',
            'twa-jack-o-lantern',
            'twa-ghost',
            'twa-santa',
            'twa-8ball',
            'twa-alarm-clock',
            'twa-apple',
            'twa-art',
            'twa-baby-bottle',
            'twa-balloon',
            'twa-banana',
            'twa-bar-chart',
            'twa-baseball',
            'twa-basketball',
            'twa-bath',
            'twa-bathtub',
            'twa-battery',
            'twa-beer',
            'twa-beers',
            'twa-bell',
            'twa-bento',
            'twa-bicyclist',
            'twa-bikini',
            'twa-birthday',
            'twa-black-joker',
            'twa-black-nib',
            'twa-blue-book',
            'twa-bomb',
            'twa-bookmark',
            'twa-bookmark-tabs',
            'twa-books',
            'twa-boot',
            'twa-bowling',
            'twa-bread',
            'twa-briefcase',
            'twa-bulb',
            'twa-cake',
            'twa-calendar',
            'twa-calling',
            'twa-camera',
            'twa-candy',
            'twa-card-index',
            'twa-cd',
            'twa-chart-with-downwards-trend',
            'twa-chart-with-upwards-trend',
            'twa-cherries',
            'twa-chocolate-bar',
            'twa-christmas-tree',
            'twa-clapper',
            'twa-clipboard',
            'twa-closed-book',
            'twa-closed-lock-with-key',
            'twa-closed-umbrella',
            'twa-clubs',
            'twa-cocktail',
            'twa-coffee',
            'twa-computer',
            'twa-confetti-ball',
            'twa-cookie',
            'twa-corn',
            'twa-credit-card',
            'twa-crown',
            'twa-crystal-ball',
            'twa-curry',
            'twa-custard',
            'twa-dango',
            'twa-dart',
            'twa-date',
            'twa-diamonds',
            'twa-dollar',
            'twa-door',
            'twa-doughnut',
            'twa-dress',
            'twa-dvd',
            'twa-e-mail',
            'twa-egg',
            'twa-eggplant',
            'twa-electric-plug',
            'twa-email',
            'twa-euro',
            'twa-eyeglasses',
            'twa-fax',
            'twa-file-folder',
            'twa-fish-cake',
            'twa-fishing-pole-and-fish',
            'twa-flashlight',
            'twa-floppy-disk',
            'twa-flower-playing-cards',
            'twa-football',
            'twa-fork-and-knife',
            'twa-fried-shrimp',
            'twa-fries',
            'twa-game-die',
            'twa-gem',
            'twa-gift',
            'twa-golf',
            'twa-grapes',
            'twa-green-apple',
            'twa-green-book',
            'twa-guitar',
            'twa-gun',
            'twa-hamburger',
            'twa-hammer',
            'twa-handbag',
            'twa-headphones',
            'twa-hearts',
            'twa-high-brightness',
            'twa-high-heel',
            'twa-hocho',
            'twa-honey-pot',
            'twa-horse-racing',
            'twa-hourglass',
            'twa-hourglass-flowing-sand',
            'twa-ice-cream',
            'twa-icecream',
            'twa-inbox-tray',
            'twa-incoming-envelope',
            'twa-iphone',
            'twa-jeans',
            'twa-key',
            'twa-kimono',
            'twa-ledger',
            'twa-lemon',
            'twa-lipstick',
            'twa-lock',
            'twa-lock-with-ink-pen',
            'twa-lollipop',
            'twa-loop',
            'twa-loudspeaker',
            'twa-low-brightness',
            'twa-mag',
            'twa-mag-right',
            'twa-mahjong',
            'twa-mailbox',
            'twa-mailbox-closed',
            'twa-mailbox-with-mail',
            'twa-mailbox-with-no-mail',
            'twa-mans-shoe',
            'twa-meat-on-bone',
            'twa-mega',
            'twa-melon',
            'twa-memo',
            'twa-microphone',
            'twa-microscope',
            'twa-minidisc',
            'twa-money-with-wings',
            'twa-moneybag',
            'twa-mountain-bicyclist',
            'twa-movie-camera',
            'twa-musical-keyboard',
            'twa-musical-score',
            'twa-mute',
            'twa-name-badge',
            'twa-necktie',
            'twa-newspaper',
            'twa-no-bell',
            'twa-notebook',
            'twa-notebook-with-decorative-cover',
            'twa-nut-and-bolt',
            'twa-oden',
            'twa-open-file-folder',
            'twa-orange-book',
            'twa-outbox-tray',
            'twa-page-facing-up',
            'twa-page-with-curl',
            'twa-pager',
            'twa-paperclip',
            'twa-peach',
            'twa-pear',
            'twa-pencil2',
            'twa-phone',
            'twa-pill',
            'twa-pineapple',
            'twa-pizza',
            'twa-postal-horn',
            'twa-postbox',
            'twa-pouch',
            'twa-poultry-leg',
            'twa-pound',
            'twa-purse',
            'twa-pushpin',
            'twa-radio',
            'twa-ramen',
            'twa-ribbon',
            'twa-rice',
            'twa-rice-ball',
            'twa-rice-cracker',
            'twa-ring',
            'twa-rugby-football',
            'twa-running-shirt-with-sash',
            'twa-sake',
            'twa-sandal',
            'twa-satellite',
            'twa-saxophone',
            'twa-scissors',
            'twa-scroll',
            'twa-seat',
            'twa-shaved-ice',
            'twa-shirt',
            'twa-shower',
            'twa-ski',
            'twa-smoking',
            'twa-snowboarder',
            'twa-soccer',
            'twa-sound',
            'twa-space-invader',
            'twa-spades',
            'twa-spaghetti',
            'twa-speaker',
            'twa-stew',
            'twa-straight-ruler',
            'twa-strawberry',
            'twa-surfer',
            'twa-sushi',
            'twa-sweet-potato',
            'twa-swimmer',
            'twa-syringe',
            'twa-tada',
            'twa-tanabata-tree',
            'twa-tangerine',
            'twa-tea',
            'twa-telephone-receiver',
            'twa-telescope',
            'twa-tennis',
            'twa-toilet',
            'twa-tomato',
            'twa-tophat',
            'twa-triangular-ruler',
            'twa-trophy',
            'twa-tropical-drink',
            'twa-trumpet',
            'twa-tv',
            'twa-unlock',
            'twa-vhs',
            'twa-video-camera',
            'twa-video-game',
            'twa-violin',
            'twa-watch',
            'twa-watermelon',
            'twa-wine-glass',
            'twa-womans-clothes',
            'twa-womans-hat',
            'twa-wrench',
            'twa-yen',
            'twa-aerial-tramway',
            'twa-airplane',
            'twa-ambulance',
            'twa-anchor',
            'twa-articulated-lorry',
            'twa-atm',
            'twa-bank',
            'twa-barber',
            'twa-beginner',
            'twa-bike',
            'twa-blue-car',
            'twa-boat',
            'twa-bridge-at-night',
            'twa-bullettrain-front',
            'twa-bullettrain-side',
            'twa-bus',
            'twa-busstop',
            'twa-car',
            'twa-carousel-horse',
            'twa-checkered-flag',
            'twa-church',
            'twa-circus-tent',
            'twa-city-sunrise',
            'twa-city-sunset',
            'twa-construction',
            'twa-convenience-store',
            'twa-crossed-flags',
            'twa-department-store',
            'twa-european-castle',
            'twa-european-post-office',
            'twa-factory',
            'twa-ferris-wheel',
            'twa-fire-engine',
            'twa-fountain',
            'twa-fuelpump',
            'twa-helicopter',
            'twa-hospital',
            'twa-hotel',
            'twa-hotsprings',
            'twa-house',
            'twa-house-with-garden',
            'twa-japan',
            'twa-japanese-castle',
            'twa-light-rail',
            'twa-love-hotel',
            'twa-minibus',
            'twa-monorail',
            'twa-mount-fuji',
            'twa-mountain-cableway',
            'twa-mountain-railway',
            'twa-moyai',
            'twa-office',
            'twa-oncoming-automobile',
            'twa-oncoming-bus',
            'twa-oncoming-police-car',
            'twa-oncoming-taxi',
            'twa-performing-arts',
            'twa-police-car',
            'twa-post-office',
            'twa-railway-car',
            'twa-rainbow',
            'twa-rocket',
            'twa-roller-coaster',
            'twa-rotating-light',
            'twa-round-pushpin',
            'twa-rowboat',
            'twa-school',
            'twa-ship',
            'twa-slot-machine',
            'twa-speedboat',
            'twa-stars',
            'twa-station',
            'twa-statue-of-liberty',
            'twa-steam-locomotive',
            'twa-sunrise',
            'twa-sunrise-over-mountains',
            'twa-suspension-railway',
            'twa-taxi',
            'twa-tent',
            'twa-ticket',
            'twa-tokyo-tower',
            'twa-tractor',
            'twa-traffic-light',
            'twa-train2',
            'twa-tram',
            'twa-triangular-flag-on-post',
            'twa-trolleybus',
            'twa-truck',
            'twa-vertical-traffic-light',
            'twa-warning',
            'twa-wedding',
            'twa-jp',
            'twa-kr',
            'twa-cn',
            'twa-us',
            'twa-fr',
            'twa-es',
            'twa-it',
            'twa-ru',
            'twa-gb',
            'twa-de',
            'twa-100',
            'twa-1234',
            'twa-a',
            'twa-ab',
            'twa-abc',
            'twa-abcd',
            'twa-accept',
            'twa-aquarius',
            'twa-aries',
            'twa-arrow-backward',
            'twa-arrow-double-down',
            'twa-arrow-double-up',
            'twa-arrow-down',
            'twa-arrow-down-small',
            'twa-arrow-forward',
            'twa-arrow-heading-down',
            'twa-arrow-heading-up',
            'twa-arrow-left',
            'twa-arrow-lower-left',
            'twa-arrow-lower-right',
            'twa-arrow-right',
            'twa-arrow-right-hook',
            'twa-arrow-up',
            'twa-arrow-up-down',
            'twa-arrow-up-small',
            'twa-arrow-upper-left',
            'twa-arrow-upper-right',
            'twa-arrows-clockwise',
            'twa-arrows-counterclockwise',
            'twa-b',
            'twa-baby-symbol',
            'twa-baggage-claim',
            'twa-ballot-box-with-check',
            'twa-bangbang',
            'twa-black-circle',
            'twa-black-square-button',
            'twa-cancer',
            'twa-capital-abcd',
            'twa-capricorn',
            'twa-chart',
            'twa-children-crossing',
            'twa-cinema',
            'twa-cl',
            'twa-clock1',
            'twa-clock10',
            'twa-clock1030',
            'twa-clock11',
            'twa-clock1130',
            'twa-clock12',
            'twa-clock1230',
            'twa-clock130',
            'twa-clock2',
            'twa-clock230',
            'twa-clock3',
            'twa-clock330',
            'twa-clock4',
            'twa-clock430',
            'twa-clock5',
            'twa-clock530',
            'twa-clock6',
            'twa-clock630',
            'twa-clock7',
            'twa-clock730',
            'twa-clock8',
            'twa-clock830',
            'twa-clock9',
            'twa-clock930',
            'twa-congratulations',
            'twa-cool',
            'twa-copyright',
            'twa-curly-loop',
            'twa-currency-exchange',
            'twa-customs',
            'twa-diamond-shape-with-a-dot-inside',
            'twa-do-not-litter',
            'twa-eight',
            'twa-eight-pointed-black-star',
            'twa-eight-spoked-asterisk',
            'twa-end',
            'twa-fast-forward',
            'twa-five',
            'twa-four',
            'twa-free',
            'twa-gemini',
            'twa-hash',
            'twa-heart-decoration',
            'twa-heavy-check-mark',
            'twa-heavy-division-sign',
            'twa-heavy-dollar-sign',
            'twa-heavy-minus-sign',
            'twa-heavy-multiplication-x',
            'twa-heavy-plus-sign',
            'twa-id',
            'twa-ideograph-advantage',
            'twa-information-source',
            'twa-interrobang',
            'twa-keycap-ten',
            'twa-koko',
            'twa-large-blue-circle',
            'twa-large-blue-diamond',
            'twa-large-orange-diamond',
            'twa-left-luggage',
            'twa-left-right-arrow',
            'twa-leftwards-arrow-with-hook',
            'twa-leo',
            'twa-libra',
            'twa-link',
            'twa-m',
            'twa-mens',
            'twa-metro',
            'twa-mobile-phone-off',
            'twa-negative-squared-cross-mark',
            'twa-new',
            'twa-ng',
            'twa-nine',
            'twa-no-bicycles',
            'twa-no-entry',
            'twa-no-entry-sign',
            'twa-no-mobile-phones',
            'twa-no-pedestrians',
            'twa-no-smoking',
            'twa-non-potable-water',
            'twa-o',
            'twa-o2',
            'twa-ok',
            'twa-on',
            'twa-one',
            'twa-ophiuchus',
            'twa-parking',
            'twa-part-alternation-mark',
            'twa-passport-control',
            'twa-pisces',
            'twa-potable-water',
            'twa-put-litter-in-its-place',
            'twa-radio-button',
            'twa-recycle',
            'twa-red-circle',
            'twa-registered',
            'twa-repeat',
            'twa-repeat-one',
            'twa-restroom',
            'twa-rewind',
            'twa-sa',
            'twa-sagittarius',
            'twa-scorpius',
            'twa-secret',
            'twa-seven',
            'twa-signal-strength',
            'twa-six',
            'twa-six-pointed-star',
            'twa-small-blue-diamond',
            'twa-small-orange-diamond',
            'twa-small-red-triangle',
            'twa-small-red-triangle-down',
            'twa-soon',
            'twa-sos',
            'twa-symbols',
            'twa-taurus',
            'twa-three',
            'twa-tm',
            'twa-top',
            'twa-trident',
            'twa-twisted-rightwards-arrows',
            'twa-two',
            'twa-u5272',
            'twa-u5408',
            'twa-u55b6',
            'twa-u6307',
            'twa-u6708',
            'twa-u6709',
            'twa-u6e80',
            'twa-u7121',
            'twa-u7533',
            'twa-u7981',
            'twa-u7a7a',
            'twa-underage',
            'twa-up',
            'twa-vibration-mode',
            'twa-virgo',
            'twa-vs',
            'twa-wavy-dash',
            'twa-wc',
            'twa-wheelchair',
            'twa-white-check-mark',
            'twa-white-circle',
            'twa-white-flower',
            'twa-white-square-button',
            'twa-womens',
            'twa-x',
            'twa-zero',
        ];

        icons = _.uniq(icons);

        var str = '';
        for (var i in icons) {
            str += tpl.replace(/{icon}/gi, icons[i]);
        }
        $('#icons').html(str);

        $('#search').on('keyup', function() {
            var val = $(this).val();
            var results = icons.filter(function(value) {
                return value.match(val);
            });
            var str = '';
            for (var i in results) {
                str += tpl.replace(/{icon}/gi, results[i]);
            }
            $('#icons').html(str);
        });

    });

})();
