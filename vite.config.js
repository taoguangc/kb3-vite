import liveReload from 'vite-plugin-live-reload'
import { resolve } from 'path'
const cwd = process.cwd()

// Docs: https://vitejs.dev/config/
export default ({ mode }) => ({
  root: 'src',
  base: mode === 'development' ? '/' : '/dist/',
  server: {
    // cors: true,
    // hmr: { host: 'localhost' },
    port: 3000,
    strictPort: true
  },

  build: {
    manifest: true,
    emptyOutDir: true,
    target: 'es2017',
    assetsDir: '.',
    outDir: resolve(cwd, 'public/dist'),
    rollupOptions: {
      input: resolve(cwd, 'src/index.js'),
    },
  },
  plugins: [
    liveReload([
      resolve(cwd, 'site/**/*.php'),
      resolve(cwd, 'content/**/*'),
    ]),
  ],
})
