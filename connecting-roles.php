<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tribre • Roles Across Organizations</title>

  <!-- If your template already loads a CSS bundle, you can remove this minimal style block -->
  <style>
    :root{
      --bg:#0b0b0c;
      --ink:#111112;
      --ink-soft:#3a3a40;
      --text:#e9e9ee;
      --muted:#b8b8c6;
      --brand:#F5B829; /* Tribre mustard */
      --solo:#2E7D32;  /* Solo accent */
      --teams:#2B6CB0; /* Teams accent example */
      --communities:#9C27B0; /* Communities accent example */
    }
    * { box-sizing:border-box }
    body{
      margin:0;
      color:var(--text);
      background:var(--bg);
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
      line-height:1.6;
    }
    a{ color:var(--brand); text-decoration:none }
    .container{ width:min(1080px, 92vw); margin:0 auto; }
    .hero{
      position:relative;
      padding:8rem 0 5rem 0;
      background: radial-gradient(1200px 600px at 70% -10%, #1a1a1f 0%, #0b0b0c 60%);
      text-align:center;
    }
    .eyebrow{
      letter-spacing:.12em; text-transform:uppercase; font-size:.8rem; color:var(--muted);
    }
    h1{ font-size: clamp(2.2rem, 4vw, 3.2rem); margin:.5rem 0 1rem 0 }
    h2{ font-size: clamp(1.6rem, 2.6vw, 2rem); color:#fff; margin:0 0 .75rem 0 }
    p.lead{ font-size:1.125rem; color:#d9d9e2; margin:0 auto 1.25rem auto; max-width:900px }
    .cta-row{ margin-top:1.25rem; display:flex; gap:.75rem; justify-content:center; flex-wrap:wrap }
    .btn{
      display:inline-block; padding:.9rem 1.15rem; border-radius:.6rem; font-weight:600; border:1px solid transparent;
      background:var(--brand); color:#1a1200;
    }
    .btn.secondary{ background:transparent; border-color:#33363f; color:#eaeaf2 }
    section{ padding:4rem 0; background:#0e0e12 }
    section.alt{ background:#101017 }
    .grid{
      display:grid; gap:2rem; grid-template-columns: 1fr;
    }
    @media (min-width: 900px){
      .grid.two{ grid-template-columns: 1.3fr .9fr }
      .grid.three{ grid-template-columns: repeat(3, 1fr) }
    }
    .card{
      background:#12121a; border:1px solid #1f1f2a; border-radius:14px; padding:1.25rem
    }
    .kicker{ color:var(--brand); font-weight:700; font-size:.9rem; letter-spacing:.06em; text-transform:uppercase }
    ul{ padding-left:1.1rem; margin: .25rem 0 0 0 }
    li{ margin:.35rem 0 }
    .foot{
      padding:3rem 0; color:#b9b9c6; background:#0b0b0c; text-align:center; border-top:1px solid #1c1c24
    }
  </style>
</head>

<body>

  <!-- HERO -->
  <header class="hero">
    <div class="container">
      <div class="eyebrow">For collaboration partners</div>
      <h1>Roles that connect organizations</h1>
      <p class="lead">
        This page speaks to people who see organizations as connected through people and their roles.
        Tribre helps those people link roles across teams and across companies,
        so information moves with less friction and shared purpose turns into shared results.
      </p>
      <div class="cta-row">
        <a href="#co-create" class="btn">Join as a collaboration partner</a>
        <a href="/html/index.php" class="btn secondary">Back to main site</a>
      </div>
    </div>
  </header>

  <!-- THE VISION -->
  <section class="alt" id="vision">
    <div class="container grid two">
      <div>
        <h2>The vision</h2>
        <p>
          People often carry more than one role. Sometimes these roles live in different organizations.
          When that happens, those people naturally become bridges. Work aligns through daily contact,
          information finds the right path, and resources shift to where they matter most.
        </p>
        <p>
          Tribre supports this reality. The platform treats roles as first class objects,
          tracks how they evolve, and makes it easy to share learning across boundaries.
          Redundant effort drops, good patterns spread, decisions improve.
        </p>
      </div>
      <div>
        <div class="card">
          <div class="kicker">What changes</div>
          <ul>
            <li>Alignment becomes continuous, not tied to weekly or biweekly meetings</li>
            <li>People see where responsibility sits and how information should flow</li>
            <li>Shared playbooks grow with real use, then travel to peers who need them</li>
            <li>Time saves compound because teams reuse what already works</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ROLE WEAVERS -->
  <section id="bridges">
    <div class="container grid two">
      <div>
        <h2>The people who bridge the gap</h2>
        <p>
          Some contributors hold similar roles in two places, for example facilitator in a product guild
          and facilitator in a partner community. Others carry two different roles that still relate,
          for example data engineer in one team and analytics coach in another. These people keep
          the conversation going. They are present in the daily work, so alignment does not wait for a calendar slot.
        </p>
      </div>
      <div class="card">
        <div class="kicker">What they gain with Tribre</div>
        <ul>
          <li>One place to manage role cards and responsibilities across contexts</li>
          <li>Clear links between inputs and outputs for each role</li>
          <li>Growth paths that reflect both roles and the skills that support them</li>
          <li>Recognition for contributions to shared playbooks and patterns</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SUPER POWERS OF CONNECTION -->
  <section class="alt" id="superpowers">
    <div class="container">
      <h2>What connected roles unlock</h2>
      <div class="grid three">
        <div class="card">
          <div class="kicker">Faster flow</div>
          <p>
            Information moves with the person who holds the role, across teams and across companies,
            so decisions happen with better context.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Shared memory</div>
          <p>
            Role patterns and playbooks live in a common library. Teams fork, adapt, and send improvements back.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Better use of time</div>
          <p>
            Less reinvention, more reuse. People ship sooner because they start from working examples.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section id="how">
    <div class="container">
      <h2>How Tribre supports cross organization roles</h2>
      <div class="grid three">
        <div class="card">
          <div class="kicker">Shared role library</div>
          <p>
            Start from a role pattern, set responsibilities, link inputs and outputs, attach playbooks,
            then publish improvements for others to use.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Role maps for initiatives</div>
          <p>
            Describe the goal and constraints, generate a first map, edit together,
            and keep a versioned history as the work evolves.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Continuous learning</div>
          <p>
            Run role retrospectives, record decisions, and show why a change was made.
            Evidence of progress stays with the role and with the person.
          </p>
        </div>
      </div>
      <div class="grid three" style="margin-top:1.5rem">
        <div class="card">
          <div class="kicker">Tribre AI as a guide</div>
          <p>
            Turn notes and transcripts into draft role cards and maps. Summarize retrospectives.
            Suggest next steps that match your context. You stay in control.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Links across communities</div>
          <p>
            Show where people hold related roles in partner groups, which makes collaborations start faster
            and handoffs feel natural.
          </p>
        </div>
        <div class="card">
          <div class="kicker">Recognition options</div>
          <p>
            Attribute changes in the library and connect the recognition model you prefer,
            so contributors feel seen and keep sharing.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- REAL COLLABORATION -->
  <section class="alt" id="partners">
    <div class="container grid two">
      <div>
        <h2>Not customers, collaboration partners</h2>
        <p>
          This path is for communities and networks that want to build together.
          We work with organizers, guild leads, facilitators, product and data leaders,
          and educators who are ready to share patterns that others can use.
        </p>
        <p>
          You bring real work and a desire to publish working practices.
          We bring product focus, support, and a platform where good patterns travel
          with credit to the people who shaped them.
        </p>
      </div>
      <div class="card">
        <div class="kicker">Partner options</div>
        <ul>
          <li>Pilot a shared library across several teams</li>
          <li>Run a cross group role mapping workshop</li>
          <li>Capture and publish playbooks from live projects</li>
          <li>Co design role retrospectives that fit your rituals</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- CALL TO CO-CREATE -->
  <section id="co-create">
    <div class="container" style="text-align:center">
      <h2>Co create the network of connected roles</h2>
      <p class="lead">
        If this speaks to you, we would like to hear your story and explore a pilot together.
        Tell us where connected roles already exist in your world,
        and what would change if they were easier to see and support.
      </p>
      <div class="cta-row">
        <a href="https://2025.tribre.com/forms/collab.php" class="btn">Become a collaboration partner</a>
        <a href="/html/purpose.php" class="btn secondary">Learn about Tribre purpose</a>
      </div>
    </div>
  </section>

  <footer class="foot">
    <div class="container">
      © <script>document.write(new Date().getFullYear())</script> Tribre. All rights reserved.
    </div>
  </footer>

</body>
</html>
