<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publication Viewer</title>
  <style>
    :root {
      --ink: #18221f;
      --paper: #f4f2ed;
      --line: #d8d9d2;
      --accent: #d86f4b;
      --muted: #68716d;
    }

    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: var(--paper);
      color: var(--ink);
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      padding: 18px 28px;
      border-bottom: 1px solid var(--line);
      background: rgba(255,255,255,0.35);
      position: sticky;
      top: 0;
      backdrop-filter: blur(3px);
    }

    .topbar h1 {
      margin: 0;
      font-size: 1rem;
      letter-spacing: .05em;
      text-transform: uppercase;
    }

    .back-link {
      color: var(--ink);
      text-decoration: none;
      border: 1px solid var(--line);
      padding: 8px 14px;
      border-radius: 999px;
      font-size: 0.8rem;
    }

    .viewer-shell {
      padding: 28px;
    }

    .viewer-frame {
      width: 100%;
      min-height: 78vh;
      border: 1px solid var(--line);
      background: white;
      box-shadow: 0 18px 40px rgba(0,0,0,0.08);
    }

    iframe {
      width: 100%;
      height: 78vh;
      border: 0;
      display: block;
    }

    @media (max-width: 640px) {
      .topbar {
        padding: 14px 18px;
      }
      .viewer-shell {
        padding: 16px;
      }
      .viewer-frame,
      iframe {
        min-height: 70vh;
        height: 70vh;
      }
    }
  </style>
</head>
<body>
  <div class="topbar">
    <h1>Published Research</h1>
    <a class="back-link" href="{{ route('resume') }}">← Back to resume</a>
  </div>

  <div class="viewer-shell">
    <div class="viewer-frame">
      <iframe src="/files/research.pdf" title="Research publication PDF"></iframe>
      <p><a href="/files/research.pdf" target="_blank" rel="noopener">Open the PDF directly</a></p>
    </div>
  </div>
</body>
</html>
