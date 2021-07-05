<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'user_id' => '1',
                'name' => 'Pizzeria Vesuvio',
                'description' => 'La pizzeria Vesuvio di Portici offre una pizza fragrante e leggera, seguendo i dettami della vera pizza
                napoletana. Impasto morbido, ingredienti di prima scelta e prodotti DOP di origine campana. La
                ricerca costante della qualità è la caratteristica principale della Pizzeria. Oggi, inoltre, l’offerta della
                pizzeria Vesuvio si allarga alle pizze senza glutine e a quelle con farina integrale, per venire incontro
                alle esigenze dei clienti.',
                'slug' => 'pizzeria-vesuvio',
                'address' => 'via Di Pietralata, 123',
                'telephone_number' => '3333451298',
                'photo' => './img/restaurants/pizza-restaurant.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'La Rossa',
                'description' => 'Sempre attenti alla qualità degli ingredienti utilizzando solo prodotti di prima qualità quali Parmigiano Reggiano, Prosciutto Curdo di Parma, Salamino Leboni, Pasta De Cecco, ci rende orgogliosi e molto apprezzati dalla nostra affezionata clientela.
                Dal pranzo alla cena, il nostro Ristorante Pizzeria è anche un luogo ideale per il ritrovo di comitive, di gruppi, per lo svolgimento di feste o per celebrare ricorrenze e festività.
                L’ottimo rapporto qualità/prezzo è ciò che ci ha sempre contraddistinto.',
                'slug' => 'la-rossa',
                'address' => 'via Tuscolana, 4',
                'telephone_number' => '32087663838',
                'photo' => './img/restaurants/rossa.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Puerto Mexico',
                'description' => 'In origine México al 104 nel rione Monti, divenuto poi México all’Aventino per circa un ventennio, oggi il
                ristorante, a dispetto dell’età e della sua lunga storia, ha ancora voglia di innovarsi e divertire. Ne è nato un
                locale tutto da scoprire e vivere, nell’atmosfera intima e nel gusto, naturalmente in pieno sabor de México.',
                'slug' => 'puerto-mexico',
                'address' => 'via Dario, 17',
                'telephone_number' => '33845190293',
                'photo' => './img/restaurants/mexican-cuisine-4-540x360.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Los Jalapenio Alegro',
                'description' => 'In origine México al 104 nel rione Monti, divenuto poi México all’Aventino per circa un ventennio, oggi il
                ristorante, a dispetto dell’età e della sua lunga storia, ha ancora voglia di innovarsi e divertire. Ne è nato un
                locale tutto da scoprire e vivere, nell’atmosfera intima e nel gusto, naturalmente in pieno sabor de México.',
                'slug' => 'los-jalapenio-alegro',
                'address' => 'via Portuense, 112',
                'telephone_number' => '33845190293',
                'photo' => './img/restaurants/jalapenio.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'La Colubrina Verde',
                'description' => 'La Colubrina è il posto per chi vuole uscire, sentendosi sempre a casa. Il menù è pensato per gli amanti della buona cucina, che hanno abbracciato una filosofia di vita
                che rispetti la natura, ma senza rinunciare a gusto e sapore!',
                'slug' => 'la-colubrina-verde',
                'address' => 'via Marco Polo, 18',
                'telephone_number' => '3445888093',
                'photo' => './img/restaurants/colubrina.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Coccinella',
                'description' => 'Una piccola oasi di pace in un quartiere affollato: le piante da interno e i colori degli arredi fanno sentire in una veranda fiorita. Piatti vegetariani gustosi e sani, cordialità e sorrisi sono di casa.',
                'slug' => 'coccinella',
                'address' => 'via Telaioscopio, 2',
                'telephone_number' => '3225637389',
                'photo' => './img/restaurants/coccinella.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Waraku',
                'description' => 'Come i nostri affezionati clienti ben sanno, da Waraku non troverete Sushi o Sashimi, né tanti altri piatti che hanno reso celebre la cucina giapponese nel mondo.No: noi di Waraku abbiamo scelto la via del Ramen!Fino a pochi anni fa, questa importantissima pietanza era decisamente poco conosciuta, almeno in Italia: eppure, si tratta di uno dei prodotti gastronomici più tipici e amati dal pubblico del Sol Levante, e a ben pensarci chi è cresciuto tra gli anni 70 e 80 del XX secolo, ha avuto modo di vedere i personaggi dei cartoni animati di allora nutrirsi di Ramen in molteplici occasioni.',
                'slug' => 'waraku',
                'address' => 'via Alessandria, 20',
                'telephone_number' => '32339846467',
                'photo' => './img/restaurants/waraku.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Xinjubin Dim Sum',
                'description' => 'Xinjubin Dim Sum e’ un tradizionale ristorante Cinese nel mercato da tanti anni. Siamo focalizzati nella cucina tradizionale Cinese e specializzati in piatti di pesce. Il nostro ristorante e’ stato rinnovato nell Agosto 2015, la sala per gli ospiti e’ confortevole e pulita. Colori freschi, ampio spazio, cibo delizioso e attenzione ai clienti, sia che tu voglia goderti una cena sontuosa o incontrarti con degli amici, sara’ la scelta migliore.',
                'slug' => 'xinjubin-dim-sum',
                'address' => 'via Garibaldi, 4',
                'telephone_number' => '33643590293',
                'photo' => './img/restaurants/xin.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Jin Xin',
                'description' => 'Oriente e tradizione romana che lavorano all’unisono per dar vita ad una filosofia culinaria fatta di grandi contaminazioni. Un menu ricco di fascino che alterna crudi e sushi, nigiri, uramaki, ravioli e bao, piatti preparati con il wok, ramen, carne, pesce e naturalmente i dessert.',
                'slug' => 'jin-xin',
                'address' => 'via Siracusa, 23',
                'telephone_number' => '3384513666',
                'photo' => './img/restaurants/jin.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Himalaya’s Kashmir',
                'description' => 'Tra le nostre specialità possiamo mettere in evidenza piatti tipici come il Pollo Tandori e il Pollo al Curry, menù di carne e anche menù per vegetariani. Una vasta scelta di gusti orientati tutti alla cucina indiana ma anche pakistana. Potete raggiungerci in auto, in autobus o con la metropolitana.',
                'slug' => 'himalaya-s-kashmir',
                'address' => 'via Geltrude, 142',
                'telephone_number' => '34066629300',
                'photo' => './img/restaurants/himalaya.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Elkadir',
                'description' => 'La vera cucina indiana a Lecco. I menù proposti accontentano proprio tutti: potrete scegliere tra quello vegetariano, quello a base di pollo, di agnello, con i gamberi, di pesce ma abbiamo anche un gustosissimo menù dedicato ai bimbi. Oppure potrete degustare i nostri piatti anche scegliendo liberamente dalla nostra carta.',
                'slug' => 'elkadir',
                'address' => 'via Contrada, 33',
                'telephone_number' => '330962570',
                'photo' => './img/restaurants/elkadir.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Isola Puket Poke',
                'description' => 'L’ambiente del ristorante è accogliente e ampio; questo locale garantisce a tutti i suoi ospiti di trascorrere, una serata piena di tranquillità assaporando il meglio della cucina orientale. I metodi di cottura sono fatti in casa e i gusti sono molto raffinati ed equilibrati.',
                'slug' => 'isola-puket-poke',
                'address' => 'via Marchigiano, 1',
                'telephone_number' => '3387770288',
                'photo' => './img/restaurants/poke.jpeg'
            ],
            [
                'user_id' => '2',
                'name' => 'Hayashi',
                'description' => 'Impegno, serietà e tradizione ci contraddistinguono da oramai 70 anni in ciò che facciamo, facendolo al meglio delle nostre possibilità. Il carattere artigianale rimane il costante
                motore della quotidiana produzione che continua oggi a regalare i tradizionali sapori dellaPasticceria mantenendo inalterata la tradizione. Tutto si basa sull’innovazione che viaggia assieme e tiene fede ovviamente ai sapori tradizionali di un tempo.',
                'slug' => 'hayashi',
                'address' => 'via Alessandro III, 21',
                'telephone_number' => '3384536222',
                'photo' => './img/restaurants/hayashi.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Fad Burger',
                'description' => 'A FAD BURGER & BISTROT offriamo piatti di eccellente qualita’ per questo ti invitiamo a provare il nostro cibo delizioso. Siamo orgogliosi nel servire ai nostri clienti piatti genuini e saporiti come Hamburger, Sandwiches, Fritti, Pizze e tanto altro!
                Mangia il tuo cibo preferito, prenditi un drink ma soprattutto rilassati!',
                'slug' => 'fad-burger',
                'address' => 'via Mastroiani, 56',
                'telephone_number' => '3384519993',
                'photo' => './img/restaurants/fed.jpg'
            ],
            [
                'user_id' => '2',
                'name' => 'Fonzie',
                'description' => 'Oltre 20 Burger e Sandwich in Menu, a partire dai grandi classici e oltre: Special egg Burger con uovo all’occhio di bue, Hot Dog di manzo, Burger di ceci e cicoria ripassata, Burger di Soia, Chicken Burger con panatura ai cereali, Pastrami
                 sandwich, Tortilla Crispy, anelli di cipolla fritti, Bagel e tanti altri sfizi fritti. Ogni Burger può essere ordinato anche al piatto, accompagnato da verdure saltate o insalata.',
                'slug' => 'fonzie',
                'address' => 'via Maremma, 9',
                'telephone_number' => '33845135423',
                'photo' => './img/restaurants/fonzie.jpg'
            ],
        ];

        $restaurant_category = config('restaurant_category');

        foreach ($restaurants as $restaurant) {
            $restaurant_obj = new Restaurant();
            $restaurant_obj->user_id = $restaurant['user_id'];
            $restaurant_obj->name = $restaurant['name'];
            $restaurant_obj->description = $restaurant['description'];
            $restaurant_obj->slug = $restaurant['slug'];
            $restaurant_obj->address = $restaurant['address'];
            $restaurant_obj->telephone_number = $restaurant['telephone_number'];
            $restaurant_obj->photo = $restaurant['photo'];
            $restaurant_obj->save();
        }

        // foreach ($restaurant_category as $relation) {
        // if ($relation["restaurant_id"] === $restaurant_obj->id) {
        //    $restaurant_obj->categories()->attach([$relation["category_id"]]);
        //    }
        // }
    }
}
