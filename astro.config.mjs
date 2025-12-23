import { defineConfig } from "astro/config";
import tailwindcss from "@tailwindcss/vite";

import vue from "@astrojs/vue";

// https://astro.build/config
export default defineConfig({
  // site: 'https://nick-sohl.github.io',
  base: '/fit-app',

  vite: {
    plugins: [tailwindcss()],
    server: {
      host: "0.0.0.0",
      port: 4321,
      watch: { usePolling: true }
    }
  },

  integrations: [vue()],
});
