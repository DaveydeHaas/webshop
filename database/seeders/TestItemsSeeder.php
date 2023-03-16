<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Mario Party',
                'category' => '1',
                'quantity' => '4',
                'price' => '35.86',
                'description' => 'Mario Party is a party video game series featuring characters from the Mario franchise in which up to four local players or computer-controlled characters compete in a board game interspersed with minigames.'
            ],
            [
                'name' => 'Nintendo switch',
                'category' => '2',
                'quantity' => '1',
                'price' => '306.55',
                'description' => 'Dit is het nieuwe Nintendo Switch Rood / Blauw (Neon) model, met verbeterde accuduur. De Switch is jouw spelcomputer voor thuis en onderweg. Beleef onderweg dezelfde game-ervaring als thuis, zelfs zonder tv. De Nintendo Switch kun je in alle situaties gebruiken, zodat je altijd gemakkelijk tussendoor de games kunt spelen die je wilt. Dit systeem luidt een nieuw tijdperk in waarin je je leven niet hoeft aan te passen om games te spelen. In plaats daarvan past het systeem zich aan aan je leven. Speel je favoriete games altijd, overal en met iedereen!'
            ],
            [
                'name' => 'Nintendo Switch Joy-Con Controller paar - Blauw en Neon Geel',
                'category' => '3',
                'quantity' => '6',
                'price' => '65',
                'description' => 'Dit is de Nintendo Switch Joy-Con Controller paar - Blauw en Neon Geel. Zo kan je bijvoorbeeld Mario Kart of Mario Party spelen met wel 4 spelers op 1 Switch! '
            ],
            [
                'name' => 'Nintendo - Super Mario Bowser AOP Men s T-shirt',
                'category' => '4',
                'quantity' => '22',
                'price' => '17.85',
                'description' => 'Een super mooi all over print T-Shirt van koning Bowser senior, de koning van de Koopas. Wel bekend uit de Super Mario Bros videogames.'
            ],
            [
                'name' => 'PlayStation 5 Console - God of War Ragnarök Bundel - Disc edition met download code',
                'category' => '2',
                'quantity' => '1',
                'price' => '600',
                'description' => 'Dit is de pre-order pagina van de Sony Playstation 5 God of War Ragnarök bundel disc edition. Vind hier alle informatie over de pre-order, prijs, beschikbaarheid en inhoudelijke informatie over de console en de DualSense draadloze controller.'
            ],
            [
                'name' => 'Sony PS5 DualSense Edge - draadloze controller',
                'category' => '3',
                'quantity' => '4',
                'price' => '200',
                'description' => 'Krijg een edge in gameplay door je eigen unieke bediening te maken die past bij je speelstijl. Gebouwd met topprestaties en personalisatie als doel, stelt de DualSense Edge™ draadloze controller je in staat om je eigen unieke game-ervaring te creëren zodat je speelt op jouw manier.'
            ],
            [
                'name' => 'Hogwarts Legacy - PS5',
                'category' => '1',
                'quantity' => '22',
                'price' => '50',
                'description' => 'Hogwarts Legacy geeft je de mogelijkheid om je eigen verhaal te maken in de Wizarding World dankzij unieke RPG-gameplay!


                Beleef een rijke, krachtige wereld vol magie en actie. Ga op in een gedetailleerd, mysterieus verhaal dat zowel fans als gamers zal aanspreken en een authentieke beleving in de Wizarding World waaraan zowel fans van Harry Potter als RPG-fans plezier zullen beleven.
                
                Laat je onderdompelen in een verhaal vol met gelaagde personages en magie. Evolueer in dit spannende verhaal door je magische vaardigheden uit te breiden door spreuken te leren, drankjes te brouwen en fantastische wezens te temmen. Naarmate het verhaal vordert, ontdek je een enorme wereld vol gevaren die zijn verbonden aan het allang vergeten verleden van de Wizarding World, en aan een zeldzame vaardigheid die alleen zij bezitten.
                
                De reis in de open wereld voert je van Zweinstein naar nieuwe en bekende locaties in de Wizarding World, waaronder het Verboden Bos en het dorpje Zweinsveld!'
            ],
            [
                'name' => 'Forspoken - PS5',
                'category' => '1',
                'quantity' => '12',
                'price' => '50',
                'description' => 'Dit is Forspoken voor de PlayStation 5. Forspoken gaat over Frey, een jonge New Yorkse die naar het mooie maar wrede land Athia gebracht wordt. In deze bloedstollende RPG moet Frey haar nieuwe magische vaardigheden gebruiken om door uitgestrekte landschappen te trekken, monsters te bestrijden en thuis te komen.'
            ],
            [
                'name' => 'Star Wars Jedi: Survivor - PS5',
                'category' => '1',
                'quantity' => '4',
                'price' => '65',
                'description' => 'Dit is Star Wars Jedi: Survivor voor de PlayStation 5. Sta op tegen de duisternis.'
            ],
            [
                'name' => 'Call of Duty Modern Warfare II - PS5',
                'category' => '1',
                'quantity' => '78',
                'price' => '63',
                'description' => 'Dit is Call of Duty: Modern Warfare II voor de PlayStation 5. Welkom in het nieuwe tijdperk van Call of Duty. Met de terugkeer van de iconische kapitein John Price, de onverschrokken John "Soap" MacTavish, de veteraan sergeant Kyle "Gaz" Garrick en de eenzame wolf zelf, de fan-favoriete operator Simon "Ghost" Riley. Spelers zullen ontdekken wat Task Force 141 tot de legendarische eenheid maakt die het nu is. Call of Duty: Modern Warfare II is het vervolg op de kaskraker van 2019, Modern Warfare.'
            ],
            [
                'name' => 'Merchandising PLAYSTATION - Sweatshirt Controller Hoodie',
                'category' => '4',
                'quantity' => '2',
                'price' => '35',
                'description' => 'PLAYSTATION - Sweatshirt Controller Hoodie '
            ],
            [
                'name' => 'Playstation - Pictogrammen Plastic Waterfles',
                'category' => '4',
                'quantity' => '12',
                'price' => '12',
                'description' => 'Blijf de hele dag gehydrateerd met een fris drankje met deze Lightweight plastic drinkfles. Deze heldere fles is voorzien van de bekende pictogrammen, driehoek, kruis, vierkant en rond, opdruk. Met zijn schroefdeksel met afsluitbaar helder drinkrietje kan deze plastic fles 700ml bevatten. Het is ook een geweldig alternatief voor plastic wegwerpflessen voor het behoud van onze planeet en onze oceanen. Product onder officiële licentie.'
            ],
            [
                'name' => 'Playstation Since 1994 Biker Snapback Cap Pet',
                'category' => '4',
                'quantity' => '2',
                'price' => '22',
                'description' => 'Een super coole officieel gelicenseerde snapback cap van Playstation met de tekst Since 1994, het jaar waarin de Playstation voor het eerst verscheen.'
            ],
            [
                'name' => "Yu-Gi-Oh! TCG King of Games - Yugi's Legendary Decks",
                'category' => '4',
                'quantity' => '2',
                'price' => '32',
                'description' => "Spelers kunnen de gedenkwaardige verhaallijnen van Duelist Kingdom en Battle City herbeleven met de decks die Yugi gebruikte om zijn rivalen te verslaan, zijn opa te redden van Pegasus, de erfenis van de farao te beschermen en de hele wereld te redden van de maniakale dreiging van Marik! Gevuld met iconische kaarten zoals Black Luster Soldier, alle vijf stukken van Exodia, de Forbidden One, Valkyrion the Magna Warrior en de speciale, langverwachte Dark Magician in Arkana-stijl, kunnen nieuwe en oude duellisten deze decks eindelijk hun eigen noemen met King of Games - Yugi's legendarische decks!"
            ],
            [
                'name' => 'Yu-Gi-Oh Saga of Blue-Eyes White Dragon Structure Deck - yugioh kaarten',
                'category' => '4',
                'quantity' => '200',
                'price' => '10',
                'description' => "Niets in het Yu-Gi-Oh universum is net zo legendarisch als de Blue-Eyes White Dragon. Vanaf de vroegste tijden was Blue-Eyes het machtigste monster dat door heel weinig andere monsters werd geëvenaard. Nu komt de legende terug om tegenstanders te verpletteren met zijn nieuwe krachten! De Saga of Blue-Eyes White Dragon Structure Deck is gebouwd rondom de Blue-Eyes White Dragon-kaart in de kern. Dat is niet alles, de introductie van Azure-Eyes Silver Dragon, een krachtig nieuw Synchro Monster waarvan de impact onmetelijk is. Nooit eerder is er een Structure Deck uitgebracht die draait om zo'n iconische kaart. Alleen de allersterksten hebben in zich wat nodig is om dit Deck te hanteren."
            ],  
        ];

        foreach($items as $item){
            Item::firstOrCreate([
                'name' => $item['name'],
                'category' => $item['category'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'description' => $item['description']
            ]);
        }
    }
}
