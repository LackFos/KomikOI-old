import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';

export default defineConfig({
   server: {
      host: '127.0.0.1'
   },
   plugins: [
      inject({   
         $: 'jquery',
         jQuery: 'jquery',
      }),
      laravel({
         input: ['resources/css/index.css', 'resources/js/index.js'],
         refresh: true,
      }),
   ],
});
