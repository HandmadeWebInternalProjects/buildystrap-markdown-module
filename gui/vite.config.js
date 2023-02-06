import { defineConfig } from 'vite'
import { viteExternalsPlugin } from 'vite-plugin-externals'
import dynamicImportVars from '@rollup/plugin-dynamic-import-vars';
import vue from '@vitejs/plugin-vue'
// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    viteExternalsPlugin({
      vue: 'Vue',
    })],
  resolve: {
    alias: {
      vue: "vue/dist/vue.esm-bundler.js",
    },
  },
  build: {
    outDir: "./dist",
    sourcemap: true,
    rollupOptions: {
      plugins: [
        dynamicImportVars(),
      ],
      output: {
        chunkFileNames: "assets/[name].js",
        entryFileNames: "assets/[name].js",
        assetFileNames: "assets/[name].[ext]",
      }
    }
  }
})
