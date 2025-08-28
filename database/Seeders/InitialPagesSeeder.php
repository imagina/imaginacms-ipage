<?php

namespace Modules\Ipage\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Ipage\Models\Page;

class InitialPagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    if (Page::count() === 0) {
      $repository = app('Modules\Ipage\Repositories\PageRepository');
      $pages = [
        [
          'system_name' => 'home',
          'options' => [],
          'en' => [
            'title' => 'Home',
            'slug' => 'home',
            'status' => 1,
            'body' => '<p>Welcome to our homepage!</p>',
            'meta_title' => 'Home',
            'meta_description' => 'Welcome to our homepage',
            'og_title' => 'Home',
            'og_description' => 'Welcome to our homepage',
            'og_image' => null,
            'og_type' => 'website',
          ],
          'es' => [
            'title' => 'Inicio',
            'slug' => 'inicio',
            'status' => 1,
            'body' => '<p>¡Bienvenido a nuestra página de inicio!</p>',
            'meta_title' => 'Inicio',
            'meta_description' => 'Bienvenido a nuestra página de inicio',
            'og_title' => 'Inicio',
            'og_description' => 'Bienvenido a nuestra página de inicio',
            'og_image' => null,
            'og_type' => 'website',
          ]
        ],
        [
          'system_name' => 'about-us',
          'options' => [],
          'en' => [
            'title' => 'About Us',
            'slug' => 'about-us',
            'status' => 1,
            'body' => '<p>Learn more about us.</p>',
            'meta_title' => 'About Us',
            'meta_description' => 'Learn more about us',
            'og_title' => 'About Us',
            'og_description' => 'Learn more about us',
            'og_image' => null,
            'og_type' => 'article',
          ],
          'es' => [
            'title' => 'Nosotros',
            'slug' => 'nosotros',
            'status' => 1,
            'body' => '<p>Conoce más sobre nosotros.</p>',
            'meta_title' => 'Nosotros',
            'meta_description' => 'Conoce más sobre nosotros',
            'og_title' => 'Nosotros',
            'og_description' => 'Conoce más sobre nosotros',
            'og_image' => null,
            'og_type' => 'article',
          ]
        ],
        [
          'system_name' => 'contact',
          'options' => [],
          'en' => [
            'title' => 'Contact',
            'slug' => 'contact',
            'status' => 1,
            'body' => '<p>Contact us here.</p>',
            'meta_title' => 'Contact',
            'meta_description' => 'Get in touch with us',
            'og_title' => 'Contact',
            'og_description' => 'Get in touch with us',
            'og_image' => null,
            'og_type' => 'website',
          ],
          'es' => [
            'title' => 'Contacto',
            'slug' => 'contacto',
            'status' => 1,
            'body' => '<p>Contáctanos aquí.</p>',
            'meta_title' => 'Contacto',
            'meta_description' => 'Ponte en contacto con nosotros',
            'og_title' => 'Contacto',
            'og_description' => 'Ponte en contacto con nosotros',
            'og_image' => null,
            'og_type' => 'website',
          ]
        ],
      ];

      foreach ($pages as $data) {
        $repository->create($data);
      }
    }
  }
}
