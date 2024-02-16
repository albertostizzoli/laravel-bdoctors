<?php

return [
    'users' => [
        [
            'name' => 'Alessandro',
            'surname' => 'Ferrari',
            'email' => 'alessandro.ferrari@example.com',
            'password' => 'sicuro1234',
        ],
        [
            'name' => 'Beatrice',
            'surname' => 'Ricci',
            'email' => 'beatrice.ricci@example.com',
            'password' => 'firenze2024',
        ],
        [
            'name' => 'Carlo',
            'surname' => 'Esposito',
            'email' => 'carlo.esposito@example.com',
            'password' => 'barisicura',
        ],
        [
            'name' => 'Daniela',
            'surname' => 'Conti',
            'email' => 'daniela.conti@example.com',
            'password' => 'contidani',
        ],
        [
            'name' => 'Emanuele',
            'surname' => 'Marino',
            'email' => 'emanuele.marino@example.com',
            'password' => 'sardegnalibera',
        ],
        [
            'name' => 'Francesca',
            'surname' => 'Greco',
            'email' => 'francesca.greco@example.com',
            'password' => 'genova2024',
        ],
        [
            'name' => 'Giovanni',
            'surname' => 'Mancini',
            'email' => 'giovanni.mancini@example.com',
            'password' => 'torino123',
        ],
        [
            'name' => 'Ilaria',
            'surname' => 'Costa',
            'email' => 'ilaria.costa@example.com',
            'password' => 'verona2024',
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Barbieri',
            'email' => 'luigi.barbieri@example.com',
            'password' => 'bolognasicura',
        ],
        [
            'name' => 'Marta',
            'surname' => 'Fontana',
            'email' => 'marta.fontana@example.com',
            'password' => 'romaeterna',
        ],
    ],

    'accounts' => [
        [
            'image' => 'storage/images/doc-1.jpg',
            'cv' => '',
            'phone' => '3471234567',
            'address' => 'Via Napoli 100',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-2.jpg',
            'cv' => '',
            'phone' => '3397654321',
            'address' => 'Piazza del Mercato 22',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-3.jpg',
            'cv' => '',
            'phone' => '3456789012',
            'address' => 'Via Lazio 5',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-4.jpg',
            'cv' => '',
            'phone' => '3339876543',
            'address' => 'Corso Umberto I, 27',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-5.jpg',
            'cv' => '',
            'phone' => '3287654321',
            'address' => 'Viale Regina Margherita 8',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-6.jpg',
            'cv' => '',
            'phone' => '3401234567',
            'address' => 'Via Garibaldi 54',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-7.jpg',
            'cv' => '',
            'phone' => '3478901234',
            'address' => 'Piazza San Carlo 33',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-8.jpg',
            'cv' => '',
            'phone' => '3498765432',
            'address' => 'Via dei Mille 21',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-9.jpg',
            'cv' => '',
            'phone' => '3334567890',
            'address' => 'Via XX Settembre 12',
            'performances' => '',
            'visible' => 0,
        ],
        [
            'image' => 'storage/images/doc-10.jpg',
            'cv' => '',
            'phone' => '3281234567',
            'address' => 'Corso Vittorio Emanuele II, 58',
            'performances' => '',
            'visible' => 0,
        ],
    ],

    'specializations' => [
        [
            'name' => 'Odontoiatria',
        ],
        [
            'name' => 'Cardiologia',
        ],
        [
            'name' => 'Dermatologia',
        ],
        [
            'name' => 'Neurologia',
        ],
        [
            'name' => 'Pediatria',
        ],
        [
            'name' => 'Ortopedia',
        ],
        [
            'name' => 'Ginecologia',
        ],
    ],

    'sponsorships' => [
        [
            'name' => 'Giornaliero',
            'duration' => '24:00:00',
            'price' => '2.99',
            'image' => '',
        ],
        [
            'name' => 'Tre Giorni',
            'duration' => '72:00:00',
            'price' => '5.99',
            'image' => '',
        ],
        [
            'name' => 'Sei Giorni',
            'duration' => '144:00:00',
            'price' => '9.99',
            'image' => '',
        ],
    ],

    'ratings' => [
        [
            'value' => 1,
        ],
        [
            'value' => 2,
        ],
        [
            'value' => 3,
        ],
        [
            'value' => 4,
        ],
        [
            'value' => 5,
        ],
    ],

    'account_rating' => [
        [
            'account_id' => 1,
            'rating_id' => 1,
        ],
        [
            'account_id' => 2,
            'rating_id' => 3,
        ],
        [
            'account_id' => 3,
            'rating_id' => 5,
        ],
        [
            'account_id' => 4,
            'rating_id' => 5,
        ],
        [
            'account_id' => 5,
            'rating_id' => 1,
        ],
        ['account_id' => 4, 'rating_id' => 5],
        ['account_id' => 4, 'rating_id' => 5],
        ['account_id' => 10, 'rating_id' => 4],
        ['account_id' => 4, 'rating_id' => 5],
        ['account_id' => 10, 'rating_id' => 3],
        ['account_id' => 4, 'rating_id' => 5],
        ['account_id' => 1, 'rating_id' => 5],
        ['account_id' => 8, 'rating_id' => 4],
        ['account_id' => 3, 'rating_id' => 5],
        ['account_id' => 6, 'rating_id' => 5],
        ['account_id' => 2, 'rating_id' => 5],
        ['account_id' => 6, 'rating_id' => 5],
        ['account_id' => 9, 'rating_id' => 1],
        ['account_id' => 1, 'rating_id' => 1],
        ['account_id' => 9, 'rating_id' => 4],
        ['account_id' => 5, 'rating_id' => 1],
        ['account_id' => 2, 'rating_id' => 5],
        ['account_id' => 5, 'rating_id' => 1],
        ['account_id' => 7, 'rating_id' => 4],
        ['account_id' => 8, 'rating_id' => 5],
        ['account_id' => 8, 'rating_id' => 4],
        ['account_id' => 3, 'rating_id' => 5],
        ['account_id' => 6, 'rating_id' => 3],
        ['account_id' => 3, 'rating_id' => 5],
        ['account_id' => 5, 'rating_id' => 3],
        ['account_id' => 5, 'rating_id' => 1],
        ['account_id' => 9, 'rating_id' => 5],
        ['account_id' => 3, 'rating_id' => 5],
        ['account_id' => 6, 'rating_id' => 3],
        ['account_id' => 6, 'rating_id' => 4],
        ['account_id' => 7, 'rating_id' => 4],
        ['account_id' => 10, 'rating_id' => 3],
        ['account_id' => 6, 'rating_id' => 3],
        ['account_id' => 4, 'rating_id' => 4],
        ['account_id' => 1, 'rating_id' => 1],
        ['account_id' => 3, 'rating_id' => 3],
        ['account_id' => 6, 'rating_id' => 5],
        ['account_id' => 8, 'rating_id' => 1],
    ],

    'account_specialization' => [['account_id' => 1, 'specialization_id' => 1], ['account_id' => 2, 'specialization_id' => 3], ['account_id' => 3, 'specialization_id' => 5], ['account_id' => 4, 'specialization_id' => 2], ['account_id' => 5, 'specialization_id' => 1], ['account_id' => 6, 'specialization_id' => 2], ['account_id' => 8, 'specialization_id' => 5], ['account_id' => 10, 'specialization_id' => 5], ['account_id' => 8, 'specialization_id' => 4], ['account_id' => 10, 'specialization_id' => 3], ['account_id' => 6, 'specialization_id' => 4], ['account_id' => 4, 'specialization_id' => 2], ['account_id' => 7, 'specialization_id' => 2], ['account_id' => 5, 'specialization_id' => 2], ['account_id' => 3, 'specialization_id' => 1], ['account_id' => 9, 'specialization_id' => 5], ['account_id' => 7, 'specialization_id' => 2]],

    'account_sponsorship' => [
        [
            'account_id' => 1,
            'sponsorship_id' => 2,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-16',
        ],
        [
            'account_id' => 2,
            'sponsorship_id' => 3,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-18',
        ],
        [
            'account_id' => 2,
            'sponsorship_id' => 3,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-21',
        ],
    ],

    'messages' => [
        [
            'account_id' => 5,
            'name' => 'Mario Rossi',
            'content' => 'Vorrei prenotare una visita per domani',
            'title' => 'Visita Urgente',
            'email' => 'mariorossi@example.com',
        ],
        [
            'account_id' => 4,
            'name' => 'Enzo Bianchi',
            'content' => 'Il mio problema mi si è ripresentato',
            'title' => 'Problema al colon',
            'email' => 'enzo@example.com',
        ],
        [
            'account_id' => 2,
            'name' => 'Giovanna Rossi',
            'content' => 'Vorrei prenotare una visita il prima possibile',
            'title' => 'Visita di controllo',
            'email' => 'gi@example.com',
        ],
        [
            'account_id' => 6,
            'name' => 'Andrea Bruno',
            'content' => 'Vorrei prenotare una visita il prima possibile',
            'title' => 'Visita Funzionale',
            'email' => 'mariorossi@example.com',
        ],
        [
            'account_id' => 9,
            'name' => 'Alessandro Rossi',
            'content' => 'Mi serve un certificato medico per i prossimi 3 giorni ',
            'title' => 'Certificato Medico',
            'email' => 'alessandrolessandro@example.com',
        ],
    ],

    'reviews' => [
        [
            'name' => 'Sophia Salvemini',
            'title' => 'Rem perspiciatis laudantium rerum in.',
            'email' => 'telemaco99@tim.it',
            'content' => 'Provident at laborum vitae ea. Animi sit fugit odio accusamus.',
            'account_id' => 3,
        ],
        ['name' => 'Ludovica Canova', 'title' => 'Explicabo perspiciatis nulla nobis assumenda.', 'email' => 'martina18@pasqua-travaglio.it', 'content' => 'Veniam recusandae rem. Eius voluptas consequatur ipsam.', 'account_id' => 7],
        ['name' => 'Sig.ra Emma Donatoni', 'title' => 'Consequuntur labore sunt rem voluptatum.', 'email' => 'stoppaniornella@virgilio.it', 'content' => 'Libero ipsum explicabo minima at. Vitae esse nostrum accusamus.', 'account_id' => 2],
        ['name' => 'Piermaria Giannuzzi', 'title' => 'Quo quidem eum quibusdam.', 'email' => 'burcardodonatello@farina-russo.com', 'content' => 'Quibusdam unde nemo. Commodi debitis omnis architecto consectetur dolore.', 'account_id' => 6],
        ['name' => 'Liana Pizziol-Farina', 'title' => 'Dolorem laudantium repudiandae esse soluta.', 'email' => 'benedettofranceschi@sobrero.com', 'content' => 'Iusto alias beatae rerum. Architecto necessitatibus quam deserunt.', 'account_id' => 9],
        ['name' => 'Roberta Travaglio-Semitecolo', 'title' => 'Repellendus deserunt id nesciunt.', 'email' => 'marco23@lollobrigida-conte.it', 'content' => 'Fuga placeat quaerat facilis. Voluptate reprehenderit magnam sunt iure qui tempore.', 'account_id' => 7],
        ['name' => 'Enzio Gaito', 'title' => 'Ducimus aut mollitia.', 'email' => 'luciamartinelli@tin.it', 'content' => 'Illum eaque maiores pariatur quis tempore.', 'account_id' => 5],
        ['name' => 'Gianluigi Morandi-Nordio', 'title' => 'Quae voluptates reprehenderit.', 'email' => 'jsquarcione@piazzi.it', 'content' => 'Porro illo odit deleniti. Odio fugiat error. Cum tenetur veniam consectetur architecto.', 'account_id' => 9],
        ['name' => 'Sig.ra Licia Turchetta', 'title' => 'Recusandae repellat nam rerum.', 'email' => 'dborgia@yahoo.com', 'content' => 'Commodi eveniet praesentium officia consequuntur vel.', 'account_id' => 1],
        ['name' => 'Coluccio Savorgnan', 'title' => 'Aut praesentium quos ab harum et aspernatur assumenda.', 'email' => 'vianellotemistocle@dallape.com', 'content' => 'Quo fugiat consectetur maxime nam maiores dolores.', 'account_id' => 5],
        ['name' => 'Diana Fusani', 'title' => 'Repellendus dolorem impedit nostrum cum non porro sunt.', 'email' => 'venanciomodigliani@vodafone.it', 'content' => 'Laborum fugiat omnis ipsum. Corporis quaerat sequi pariatur recusandae doloremque.', 'account_id' => 4],
        ['name' => 'Ottavio Mazzini', 'title' => 'Officiis voluptatibus perferendis dignissimos quasi fugiat quibusdam.', 'email' => 'ettorecheda@libero.it', 'content' => 'Tempora doloremque maiores ducimus. Odio deserunt reiciendis.', 'account_id' => 7],
        ['name' => 'Nadia Tanzini', 'title' => 'Libero inventore sit dolor impedit.', 'email' => 'gianluigicrespi@calvo.net', 'content' => 'Hic mollitia consequatur sequi ab consequuntur. Asperiores aspernatur amet sint quidem repudiandae.', 'account_id' => 2],
        ['name' => 'Fabio Delle-Vergassola', 'title' => 'Molestias ipsa quasi ab dolorem non quas ratione.', 'email' => 'antonelloforza@rinaldi.com', 'content' => 'Natus veniam similique. Rerum vel corrupti incidunt quidem. Soluta rem mollitia mollitia repellat.', 'account_id' => 7],
        ['name' => 'Vittorio Leopardi', 'title' => 'Minus quasi repellendus excepturi tempore.', 'email' => 'giuseppina14@marinetti.it', 'content' => 'Officiis sit fugit. Nam accusamus illo pariatur ducimus.', 'account_id' => 5],
        ['name' => 'Tina Falloppio', 'title' => 'Pariatur quis dignissimos nulla nam.', 'email' => 'mauro37@libero.it', 'content' => 'Quisquam sed eius vero non itaque iste magnam. Deserunt modi atque eveniet id.', 'account_id' => 10],
        ['name' => 'Osvaldo Rusticucci', 'title' => 'Provident porro ullam quasi rerum recusandae.', 'email' => 'tcasini@badoglio-iannucci.it', 'content' => 'Blanditiis pariatur reprehenderit architecto iusto vitae eveniet. Doloribus vero vero a.', 'account_id' => 6],
        ['name' => 'Antonia Filippelli', 'title' => 'Architecto nesciunt enim.', 'email' => 'valentina24@libero.it', 'content' => 'Aliquam sequi modi velit provident possimus. Illum officia quidem dicta.', 'account_id' => 10],
        ['name' => 'Sonia Ruffini', 'title' => 'Dicta necessitatibus doloribus provident optio aliquam ea laborum.', 'email' => 'omascagni@gmail.com', 'content' => 'Expedita ipsa quis illum perspiciatis. Repellat quisquam natus quis modi neque enim.', 'account_id' => 3],
        ['name' => 'Piergiuseppe Tropea', 'title' => 'Amet a libero ab iste accusamus rem.', 'email' => 'borsieretorquato@cremonesi-verga.net', 'content' => 'Recusandae facilis dolores explicabo. Veritatis nihil est tempore harum veniam.', 'account_id' => 4],
        ['name' => 'Jacopo Cafarchia-Michelangeli', 'title' => 'Velit cupiditate libero hic.', 'email' => 'xtrezzini@virgilio.it', 'content' => 'Nulla sit quos eaque. Repellat tempora perspiciatis blanditiis eligendi sequi.', 'account_id' => 8],
        ['name' => 'Cirillo Lanfranchi', 'title' => 'Error quas ea quidem unde.', 'email' => 'jlopresti@curatoli.it', 'content' => 'Aliquid illo repudiandae alias necessitatibus voluptatum. Autem exercitationem odio consequuntur.', 'account_id' => 9],
        ['name' => 'Giada Rienzo', 'title' => 'Eos minima explicabo ex.', 'email' => 'ortolanifortunata@gmail.com', 'content' => 'Rem consectetur pariatur ipsam culpa. Autem nostrum aspernatur.', 'account_id' => 6],
        ['name' => 'Fabrizia Squarcione-Cantimori', 'title' => 'Odio corporis et fugiat ullam at doloribus consectetur.', 'email' => 'ramona50@ferrabosco.it', 'content' => 'Reprehenderit molestias illo.', 'account_id' => 1],
        ['name' => 'Ezio Righi', 'title' => 'Officia sed est culpa quod illum.', 'email' => 'giampaoloangeli@giannini-venturi.it', 'content' => 'Unde sunt voluptatum reiciendis.', 'account_id' => 1],
        ['name' => 'Angelina Pucci', 'title' => 'Aperiam consequatur reiciendis distinctio.', 'email' => 'afantoni@gmail.com', 'content' => 'Sint fugit repudiandae nisi reiciendis consequatur. Amet voluptatum quisquam provident.', 'account_id' => 8],
        ['name' => 'Giancarlo Badoer', 'title' => 'Quibusdam accusamus ad reprehenderit officiis esse.', 'email' => 'isa65@tiscali.it', 'content' => 'Impedit commodi dignissimos odio veniam voluptas. Laboriosam harum cupiditate tempora nemo.', 'account_id' => 4],
        ['name' => 'Bianca Barberini', 'title' => 'Perferendis modi animi quae voluptates consectetur itaque.', 'email' => 'bmanacorda@babbo-inzaghi.org', 'content' => 'Voluptatum quibusdam a tempore et et. Architecto adipisci veritatis voluptates velit.', 'account_id' => 5],
        ['name' => 'Federica Cipolla-Tosi', 'title' => 'Quibusdam nobis distinctio facere ducimus rerum perferendis.', 'email' => 'giulio70@gmail.com', 'content' => 'Tempore maxime impedit laudantium. Corrupti suscipit culpa hic a occaecati tenetur.', 'account_id' => 9],
        ['name' => 'Osvaldo Giannetti', 'title' => 'Est quae deleniti consequuntur.', 'email' => 'vgiorgetti@manunta.org', 'content' => 'Recusandae veritatis adipisci exercitationem.\nAt iusto voluptates optio delectus dolorem itaque.', 'account_id' => 9],
    ],
];
