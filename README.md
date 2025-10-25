<<<<<<< HEAD
# XyraChatAI
=======

# Gemini API Vercel Proxy

Proxy untuk Gemini API menggunakan Vercel Edge Functions.

## Deployment ke Vercel

1. Install Vercel CLI:
```bash
npm i -g vercel
```

2. Login ke Vercel:
```bash
vercel login
```

3. Deploy:
```bash
vercel
```

4. Set environment variable:
```bash
vercel env add GEMINI_API_KEY
```
Masukkan API key: `AIzaSyDD4f1A2OJhGUoW_sLmz0LvUD9BIqW73ww`

5. Deploy production:
```bash
vercel --prod
```

## URL API

Setelah deploy, URL akan seperti:
`https://nama-project.vercel.app/api/proxy`

## Penggunaan

POST request ke endpoint dengan body:
```json
{
  "contents": [{
    "parts": [{"text": "Your prompt here"}]
  }]
}
```
>>>>>>> 03fb75b (first commit)
