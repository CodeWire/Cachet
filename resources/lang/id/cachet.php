<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Operasional',
            2 => 'Masalah Kinerja',
            3 => 'Gagal Sebagian',
            4 => 'Kegagalan Sistem',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Tidak ada insiden.',
        'past'          => 'Insiden sebelumnya',
        'previous_week' => 'Pekan sebelumnya',
        'next_week'     => 'Pekan selanjutnya',
        'none'          => 'Tidak ada yang bisa dilaporkan',
        'scheduled'     => 'Jadwal Pemeliharaan',
        'scheduled_at'  => ', dijadwalkan pada :timestamp',
        'status'        => [
            0 => 'Dijadwalkan', // TODO: Hopefully remove this.
            1 => 'Investigasi',
            2 => 'Teridentifikasi',
            3 => 'Dimonitor',
            4 => 'Selesai',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Seluruh sistem berfungsi baik.',
        'bad'  => 'Sebagian sistem mengalami masalah.',
    ],

    'api' => [
        'regenerate' => 'Buat ulang API Key',
        'revoke'     => 'Cabut API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Per jam',
            'daily'   => 'Harian',
            'monthly' => 'Bulanan',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'   => 'Subscribe to email updates.',
            'subscribed'  => 'You\'ve been subscribed to email notifications.',
            'verified'    => 'Your email subscription has been confirmed. Thank you!',
            'unsuscribe'  => 'Unsuscribe from email updates.',
            'unsuscribed' => 'Your email subscription has been canceled,',
            'failure'     => 'Something went wrong with the subscription.',
        ],
    ],

    // Other
    'powered_by'      => 'Halaman Status :app dibuat dengan <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Tentang situs ini',
    'rss-feed'        => 'Pasokan RSS',
    'atom-feed'       => 'Pasokan Atom',
    'feed'            => 'Pasokan Status',

];
