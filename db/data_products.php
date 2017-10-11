<?php
/**
 * Fichier de déclaration des données de produits de GUIT
 */

/**
 * Rappel des ids de catégories
 *
'Bass Guitars','1'
'Electric Guitars','2'
'Acoustic Guitars','3'
 */

/**
 * Déclaration des clefs des champs des produits
 */
define('PROD_CAT', 'prod_cat'); // Id de la catégorie du produit (string)
define('PROD_NAME', 'prod_name'); // Nom de produit (string)
define('PROD_COLOR', 'prod_color');
define('PROD_IMG1', 'prod_img1'); // Fichier image (principal) du produit (string)
define('PROD_IMG2', 'prod_img2'); // Autre fichier image du produit, optionnel, vide si absent  (string)
define('PROD_IMG3', 'prod_img3');
define('PROD_DESC_C', 'prod_desc_c'); // Description courte du produit (string)
define('PROD_DESC_D', 'prod_desc_d'); // Description détaillée du produit (string - HTML)
define('PROD_PRICE', 'prod_price');
define('PROD_MODEL', 'prod_model');
define('BASS', 'Bass Guitar');
define('GUITAR', 'Electric Guitar');
define('ACOUSTIC', 'Acoustic Guitar');

$products = array(
    '4' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model AP-204',
        PROD_CAT => '1',
        PROD_COLOR => 'Color Burgundy Burst',
        PROD_PRICE => '1200 $',
        PROD_IMG1 => 'b-ap204.png',
        PROD_IMG2 => 'horizontal/h-ap204.png',
        PROD_IMG3 => 'b-ap204-s.png',
        PROD_DESC_C => 'A bolt-on design at classic 34” scale that’s great for any kind of music, the AP-204 is available in Charcoal Metallic and Burgundy Burst finishes, with a mahogany body and a comfortable thin U-shaped maple neck.',
        PROD_DESC_D => 'The AP-204 combines traditional styling with the high-performance feel you expect from a bass, all at a price you can afford. A bolt-on design at classic 34” scale that’s great for any kind of music, the AP-204 is available in Charcoal Metallic and Burgundy Burst finishes, with a mahogany body, a comfortable thin U-shaped maple neck, and rosewood fingerboard with 21 extra-jumbo frets. A sonically versatile bass, the AP-204 includes a set of LDP and LDJ pickups, with active 2-band EQ.',
    ),
    '5' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model B-1005SE',
        PROD_CAT => '1',
        PROD_COLOR => 'Color Natural Satin',
        PROD_PRICE => '1400 $',
        PROD_IMG1 => 'b-b1005se.png',
        PROD_IMG2 => 'horizontal/h-b1005se.png',
        PROD_IMG3 => 'b-b1005se-s.png',
        PROD_DESC_C => 'The first thing you’ll notice about the B-1005SE Multi-Scale will likely be its unusual arrangement of frets. A multi-scale fret design optimizes string tension so that the lower strings have a longer scale versus the higher strings.',
        PROD_DESC_D => 'The first thing you’ll notice about the B-1005SE Multi-Scale will likely be its unusual arrangement of frets. A multi-scale fret design optimizes string tension so that the lower strings have a longer scale versus the higher strings, resulting in consistently excellent tone and performance at all points across the fingerboard. Bass players often report that a multi-scale design is also ergonomically preferential to standard fret designs, and that they feel natural to play, with very little learning curve required. Designed for professional players, the 5-string B-1005SE Multi-Scale provides a swamp ash body with a solid rosewood top, and a five-piece wenge/bubinga neck with rosewood fingerboard, constructed at 37" to 34" multi-scale. Its components include Gotoh tuners, and Hipshot Solo bridge, and acclaimed Nordstrand Big Splits hum-cancelling pickups, along with an ABQ-3MS 3-band EQ. This setup gives you incredible flexibility in tone, with an active/passive mini-switch, a mid-frequency selection mini-switch (800Hz or 400Hz), individual bass, treble, and mid EQ controls, and master volume and balance controls. Available in Natural Satin finish.',
    ),
    '6' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model F-415FM',
        PROD_CAT => '1',
        PROD_COLOR => 'Color See Thru Black',
        PROD_PRICE => '830 $',
        PROD_IMG1 => 'b-f415fm.png',
        PROD_IMG2 => 'horizontal/h-f415fm.png',
        PROD_IMG3 => 'b-f415fm-s.png',
        PROD_DESC_C => 'A 35” scale neck-thru-body design for great tones even at sinister depths. A flamed maple top with a See Thru Black finish. High-end components including Grover tuners and EMG 40DC active pickups and 3-band EQ.',
        PROD_DESC_D => 'Here’s everything you want in an aggressive 5-string bass: great body styling with beveled curves and menacing points. A 35” scale neck-thru-body design for great tones even at sinister depths. A flamed maple top with a See Thru Black finish. High-end components including Grover tuners and EMG 40DC active pickups and 3-band EQ. And it’s all wrapped up in a surprisingly affordable package for a bass that offers the tones you need for the studio and high reliability for the stage. Don’t wait; get to your dealer and be blown away by the LTD F-415FM.',
    ),
    '7' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model H-1005SE',
        PROD_CAT => '1',
        PROD_COLOR => 'Color Honey Natural',
        PROD_PRICE => '1450 $',
        PROD_IMG1 => 'b-h1005se.png',
        PROD_IMG2 => 'horizontal/h-h1005se.png',
        PROD_IMG3 => 'b-h1005se-s.png',
        PROD_DESC_C => 'The H-1005SE is a special edition 5-string bass that is based on the rare and coveted Horizon bass. Serious players will love the feel of this neck-thru-body design.',
        PROD_DESC_D => 'Part of the LTD Deluxe Series that’s designed for professional musical applications on stage and in the studio, the H-1005SE is a special edition 5-string bass that is based on the rare and coveted Horizon bass. Serious players will love the feel of this neck-thru-body design that pairs a mahogany body with a solid burled maple top. Its 35” scale will ensure great string tension even when downtuned, and it offers a great-feeling five-piece maple/bubinga neck with 24-fret rosewood fingerboard. Components on the H-1004SE include high-quality tuners and bridge from Gotoh, but it is highlighted by the inclusion of Nordstrand Big Splits hum-cancelling pickups, along with an ABQ-3MS 3-band EQ. This setup gives you incredible flexibility in tone, with an active/passive mini-switch, a mid-frequency selection mini-switch (800Hz or 400Hz), individual bass, treble, and mid EQ controls, and master volume and balance controls. Available in Honey Natural finish.',
    ),
    '8' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model Stream CTM',
        PROD_CAT => '1',
        PROD_COLOR => 'Color Marine Blue',
        PROD_PRICE => '4600 $',
        PROD_IMG1 => 'b-streamctm.png',
        PROD_IMG2 => 'horizontal/h-streamctm.png',
        PROD_IMG3 => 'b-streamctm-s.png',
        PROD_DESC_C => 'These bolt-on basses take craftsmanship to the extreme, using only the finest in white ash bodies, a high-density wood that helps produce punchy, detailed tones with excellent sustain.',
        PROD_DESC_D => 'It seems as if there’s always been a trade-off between cool design and performance in basses. Not so with the Stream bass. You get a funky retro-inspired shape, but you also get all of the high quality and supreme playability that only the Custom Shop’s luthiers can provide. These bolt-on basses take craftsmanship to the extreme, using only the finest in white ash bodies, a high-density wood that helps produce punchy, detailed tones with excellent sustain. They also offer the strength and beauty of a 7-piece neck, with a thin contour that allows for very comfortable playing. The Stream basses also feature Hipshot bridges and tuners, and are meant for players who need a serious, professional-quality instrument for studio work and tours.',
    ),
    '9' => array(
        PROD_NAME => BASS,
        PROD_MODEL => 'Model TL-4Z Fretless',
        PROD_CAT => '1',
        PROD_COLOR => 'Color Natural Gloss',
        PROD_PRICE => '600 $',
        PROD_IMG1 => 'b-tl4z.png',
        PROD_IMG2 => 'horizontal/h-tl4z.png',
        PROD_IMG3 => 'b-tl4z-s.png',
        PROD_DESC_C => 'Built with set-neck construction at 34" scale, the TL-4Z Fretless has a three-piece thin U-shaped mahogany neck, a rosewood fingerboard with line markers, a Graphtech Nubone XB nut and saddle.',
        PROD_DESC_D => 'The LTD Thinline TL-4Z Fretless is an excellent solution for bassists looking for a fretless instrument that allows for both acoustic and electric performances. It offers a chambered mahogany body with a Natural Gloss finished zebrawood top. Built with set-neck construction at 34" scale, the TL-4Z Fretless has a three-piece thin U-shaped mahogany neck, a rosewood fingerboard with line markers, a Graphtech Nubone XB nut and saddle, Grover tuners, and a Fishman SONICORE pickup and TL-3 preamp with onboard tuner. You get the best of both worlds with versatile fretless acoustic tones and electric feel, all in a well-built bass that you can afford.',
    ),
    '10' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model AX-50',
        PROD_CAT => '2',
        PROD_COLOR => 'Color Black Satin',
        PROD_PRICE => '380 $',
        PROD_IMG1 => 'g-ax50.png',
        PROD_IMG2 => 'horizontal/h-ax50.png',
        PROD_IMG3 => 'g-ax50-s.png',
        PROD_DESC_C => 'The AX-50 comes in a menacing Black Satin finish, but it’s more than just a cool looking guitar. It offers two LH-150 pickups, along with a basswood body, a maple neck, and 24 extra jumbo frets.',
        PROD_DESC_D => 'A bold and aggressive design is the hallmark of the LTD AX guitars! Perfect for metal, hard rock, and other music genres where you want to stand out from the crowd, the AX-50 comes in a menacing Black Satin finish, but it’s more than just a cool looking guitar. It offers two LH-150 pickups, along with a basswood body, a maple neck, and a 24 extra jumbo fret rosewood fingerboard, as well as a TOM-style bridge with string-thru-body design.',
    ),
    '11' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model EC-1000',
        PROD_CAT => '2',
        PROD_COLOR => 'Color See Thru Blue',
        PROD_PRICE => '1200 $',
        PROD_IMG1 => 'g-ec1000.png',
        PROD_IMG2 => 'horizontal/h-ec1000.png',
        PROD_IMG3 => 'g-ec1000-s.png',
        PROD_DESC_C => 'As one of the most innovative and versatile guitars in the LTD Deluxe Series, the EC-1000 PIEZO is our first model to include both standard magnetic pickups as well as a completely separate piezo pickup system.',
        PROD_DESC_D => 'As one of the most innovative and versatile guitars in the LTD Deluxe Series, the EC-1000 PIEZO is our first model to include both standard magnetic pickups as well as a completely separate piezo pickup system. Piezo pickups create a very different sound from typical magnetic pickups, offering excellent articulate, acoustic-like tones. With the EC-1000 PIEZO, you can use the mini toggle switch to select between the standard pickup set -- the excellent  Seymour Duncan ’59 and JB -- and a Fishman Powerbridge and Tailpiece, or even combine them both. This level of sonic flexibility continues to the guitar\'s dual output jacks, allowing you to route the pickups to different combinations of amplifiers or interfaces onstage for live performances or in the studio for recording sessions. The EC-1000 PIEZO offers a great-looking quilted maple top on its mahogany body, and is available in See Thru Blue and See Thru Black finishes.',
    ),
    '12' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model Arrow',
        PROD_CAT => '2',
        PROD_COLOR => 'Color Rusty Iron',
        PROD_PRICE => '4200 $',
        PROD_IMG1 => 'g-esparrow.png',
        PROD_IMG2 => 'horizontal/h-esparrow.png',
        PROD_IMG3 => 'g-esparrow-s.png',
        PROD_DESC_C => 'The Arrow is a completely modern machine, with neck-thru-body construction at 25.5" scale, a set of active Seymour Duncan Blackout pickups.',
        PROD_DESC_D => 'The Original Series are guitars made by hand by our experienced master luthiers who work in the Custom Shop in Tokyo, Japan. Each guitar is made one at a time, with a level of detail and craftsmanship that\'s unsurpassed in the musical instrument industry. With the Arrow Rusty Iron, you get a guitar that will set you apart from the rest of the world. It has a textured finish that looks like oxidized metal, as if your guitar was an ancient relic sculpted in a different era. But the Arrow is a completely modern machine, with neck-thru-body construction at 25.5" scale, a set of active Seymour Duncan Blackout pickups, and top-tier components like a Floyd Rose Original bridge and Gotoh locking tuners. It offers an alder body, a super-fast three-piece maple neck, and an ebony fingerboard with 24 extra-jumbo frets. Includes a hardshell case.',
    ),
    '13' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model EC-50',
        PROD_CAT => '2',
        PROD_COLOR => 'Color Black Cherry Metallic',
        PROD_PRICE => '350 $',
        PROD_IMG1 => 'g-ec50.png',
        PROD_IMG2 => 'horizontal/h-ec50.png',
        PROD_IMG3 => 'g-ec50-s.png',
        PROD_DESC_C => 'The EC-50 has the aggressive styling and sound you need, with a comfortable basswood body, a fast maple neck at 24.75” scale.',
        PROD_DESC_D => 'If you’re getting started on guitar and plan to rock hard, the LTD EC-50 is a great way to get rolling in the world of metal! The EC-50 has the aggressive styling and sound you need, with a comfortable basswood body, a fast maple neck at 24.75” scale, and a rosewood fingerboard with 22XJ frets. You also get a TOM bridge and tailpiece, and LH-150 passive pickups. Available in both Black and Snow White finishes, this is a great rock guitar that you can easily afford! Available in Black or Black Cherry Metallic finishes.',
    ),
    '14' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model FRX-401',
        PROD_CAT => '2',
        PROD_COLOR => 'Color Snow White',
        PROD_PRICE => '800 $',
        PROD_IMG1 => 'g-frx401.png',
        PROD_IMG2 => 'horizontal/h-frx401.png',
        PROD_IMG3 => 'g-frx401-s.png',
        PROD_DESC_C => 'It has set-thru neck construction, mahogany body, 3 pc. maple neck, and rosewood fingerboard with 24 extra jumbo frets. Its sound is powered by active EMG 81/60 pickups.',
        PROD_DESC_D => 'Harkening back to our roots as a maker of extreme guitar shapes, the FRX-401 (available in both Black and Snow White finishes) leaves no doubt that you’re there to rock. Its curves and bevels are a statement unto themselves, but the FRX-401 is much more than a cool looking guitar. It has set-thru neck construction, mahogany body, 3 pc. maple neck, and rosewood fingerboard with 24 extra jumbo frets. Its sound is powered by active EMG 81/60 pickups. Perfect for stage, studio and the road, the FRX-401 will rock as hard as you can.',
    ),
    '15' => array(
        PROD_NAME => GUITAR,
        PROD_MODEL => 'Model Horizon',
        PROD_CAT => '2',
        PROD_COLOR => 'Color Antique Brown Sunburst',
        PROD_PRICE => '1800 $',
        PROD_IMG1 => 'g-horizon.png',
        PROD_IMG2 => 'horizontal/h-horizon.png',
        PROD_IMG3 => 'g-horizon-s.png',
        PROD_DESC_C => 'The Horizon leaves no stone unturned, from its super high-quality tonewoods to beautiful translucent finishes to the luxurious masked binding on its body and headstock.',
        PROD_DESC_D => 'The Horizon was designed for the ultimate in high performance. Since it is created in a world-famous custom shop by our experienced master luthiers, you get the same level of detail and quality that you’d expect in a masterfully-built hand-crafted guitar. The Horizon leaves no stone unturned, from its super high-quality tonewoods to beautiful translucent finishes to the luxurious masked binding on its body and headstock. Made for serious players, the Horizon has a set-thru neck design, allowing for buttery smooth access to the highest frets. Its components include Seymour Duncan passive pickups that can go from a whisper to a roar with the turn of a knob, with wonderful dynamic response. Add in its beveled and contoured body, and you get the ultimate super guitar for players who demand nothing but the best.',
    ),
    '16' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model KC70',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Natural Satin',
        PROD_PRICE => '2000 $',
        PROD_IMG1 => 'a-chesney.png',
        PROD_IMG2 => 'horizontal/h-chesney.png',
        PROD_IMG3 => 'a-chesney-s.png',
        PROD_DESC_C => 'Features a solid cedar top and solid sapele back with a silky smooth satin finish. Each label is signed by Kenny. "Crouton lives" laser etched in the heelblock. Includes CT4B II preamp system.',
        PROD_DESC_D => 'Guitars, Tiki Bars and a Whole Lotta Love!!! The KC70 Kenny Chesney Signature Model is your one-way ticket to a little piece of paradise. Designed by Kenny, this guitar captures the island spirit perfectly. The good times are just a couple chords away. Features a solid cedar top and solid sapele back with a silky smooth satin finish. Each label is signed by Kenny. “Crouton lives” laser etched in the heelblock. Includes CT4B II preamp system paired with the unique Palathetic™ under-saddle pickup for peerless amplified response. The highly acclaimed CT4B II preamp system with three-band EQ, volume control and built-in tuner.',
    ),
    '17' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model Magome',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Gloss Midnight Blue',
        PROD_PRICE => '2900 $',
        PROD_IMG1 => 'a-ltdmagome.png',
        PROD_IMG2 => 'horizontal/h-ltdmagome.png',
        PROD_IMG3 => 'a-ltdmagome-s.png',
        PROD_DESC_C => 'A special limited-edition guitar, Magome is an OM-sized acoustic-electric guitar with a solid spruce top and solid Indian rosewood back and sides.',
        PROD_DESC_D => 'The LTD-2017 Magome is a testament to the artful craftsmanship of this region—the very same region in which guitars are lovingly crafted to this day. A special limited-edition guitar, Magome is an OM-bodied acoustic-electric guitar with a solid spruce top and solid Indian rosewood back and sides. It features a mahogany neck with an ebony fingerboard that’s inlaid with an intricate abalone “Legend of the Road” motif. The guitar features renowned Palathetic pickup with a CTP-3 CoolTube preamp, a bone nut and saddle, abalone purfling and rosette, and gold hardware. It’s available in a gloss black finish with cream binding, and includes a commemorative Certificate of Authenticity.',
    ),
    '18' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model P6JC-12',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Brown Sunburst Gloss',
        PROD_PRICE => '2500 $',
        PROD_IMG1 => 'a-p6jc12.png',
        PROD_IMG2 => 'horizontal/h-p6jc12.png',
        PROD_IMG3 => 'a-p6jc12-s.png',
        PROD_DESC_C => 'P6JC-12 jumbo cutaway 12-string model is loud and forceful, with a resonant solid spruce top with scalloped "X" top bracing for maximum volume.',
        PROD_DESC_D => 'P6JC-12 jumbo cutaway 12-string model is loud and forceful, with a resonant solid spruce top with  “X” top bracing for maximum volume, a solid flame maple back and flame maple sides, a convenient Venetian cutaway for easy access to the upper reaches of the fingerboard, and elegant ivory body binding with black and white purfling and mother-of-pearl rosette.Built with the performer in mind, the P6JC-12 features CTP-3 Cool Tube preamp system paired with the unique Palathetic under-saddle pickup for peerless amplified response. The dual-channel CTP-3 provides low-voltage tube tone, variable from bright and brilliant to thick and warm, three-band EQ with semi-parametric midrange, auxiliary input and volume (for use when a second pickup is added), and an onboard chromatic tuner.Other performance-enhancing features include asymmetrical neck profile – which is slightly thinner on the bass side so that it fits the natural shape of your hand, resulting in a comfortable feel and improved playability. The split bone saddle provides more accurate intonation, while bridge pin positioning optimizes break angle to improve sustain and presence. Premium design appointments include an ebony fingerboard with ivory binding and mother-of-pearl “snowflake” inlays, a black headcap, gold tuners with pearl buttons, a natural bone nut and gloss brown sunburst finish. The P6JC-12 comes complete with a premium archtop hardshell case.',
    ),
    '19' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model PB5 SBL',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Gloss See-thru Black',
        PROD_PRICE => '2800 $',
        PROD_IMG1 => 'a-pb5.png',
        PROD_IMG2 => 'horizontal/h-pb5.png',
        PROD_IMG3 => 'a-pb5-s.png',
        PROD_DESC_C => 'A unique hybrid crossover bass guitar, it retains the 34” scale but the fretboard has the radius of an upright bass, which allows for bowing.',
        PROD_DESC_D => 'A unique hybrid crossover bass guitar, it retains the 34” scale but the fretboard has the radius of an upright bass, which allows for bowing. It can be played as a regular bass guitar or as an upright with the tail pin extension peg. This fretless instrument produces a tone heavy and fundamental with the rich harmonics you would expect from an upright bass. Includes Palathetic pickup, known in the industry as one of the most accurate and natural sounding acoustic/electric pickups. The electronic performance package is beyond state of the art with the Cool Tube® Preamp - the first and only tube preamp in an acoustic guitar.',
    ),
    '20' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model TB10',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Red Stain',
        PROD_PRICE => '1595 $',
        PROD_IMG1 => 'a-tb10.png',
        PROD_IMG2 => 'horizontal/h-tb10.png',
        PROD_IMG3 => 'a-tb10-s.png',
        PROD_DESC_C => 'It can be played as a regular bass guitar or as an upright with the tail pin extension peg. This fretless instrument produces a tone heavy and fundamental with the rich harmonics you would expect from an upright bass.',
        PROD_DESC_D => 'The TB10 bass is handcrafted in our pro series facility that has been building precision quality instruments over five decades. A unique hybrid crossover bass guitar, it retains the 34” scale but the fretboard has the radius of an upright bass, which allows for bowing. It can be played as a regular bass guitar or as an upright with the tail pin extension peg. This fretless instrument produces a tone heavy and fundamental with the rich harmonics you would expect from an upright bass. Includes Palathetic pickup, known in the industry as one of the most accurate and natural sounding acoustic/electric pickups. The electronic performance package is beyond state of the art with the Cool Tube® Preamp - the first and only tube preamp in an acoustic guitar.',
    ),
    '21' => array(
        PROD_NAME => ACOUSTIC,
        PROD_MODEL => 'Model EF450C',
        PROD_CAT => '3',
        PROD_COLOR => 'Color Gloss Transparent Blackburst',
        PROD_PRICE => '2700 $',
        PROD_IMG1 => 'a-tbb.png',
        PROD_IMG2 => 'horizontal/h-tbb.png',
        PROD_IMG3 => 'a-tbb-s.png',
        PROD_DESC_C => 'The EF450C TT TBB is a tastefully ornate instrument, incorporating "Grass Flower" inlays made from hundreds of pieces of abalone and pearl.',
        PROD_DESC_D => 'These new models take advantage of "Thermal Top" technology, in which the spruce wood for the guitar tops are baked in a controlled high-heat, low-oxygen environment. Specifications Top Solid Thermal Spruce Back Solid Flame Maple Sides Flame Maple Neck	Maple Finger Board Striped Ebony Nut Width 42.5mm Electronics TLD-2 Finish Transparent Black Burst.',
    ),
    );
