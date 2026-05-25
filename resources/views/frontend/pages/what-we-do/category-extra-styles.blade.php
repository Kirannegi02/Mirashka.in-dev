<style>
    /* Workflow — payroll & documentation */
    .cwi-workflow { padding: 80px 0; }
    .cwi-workflow__header { max-width: 720px; margin: 0 auto 40px; text-align: center; }
    .cwi-workflow__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--cwi-green); margin-bottom: 10px;
    }
    .cwi-section--dark .cwi-workflow__eyebrow { color: var(--cwi-mint); }
    .cwi-workflow__header h2 {
        margin: 0 0 12px; font-size: clamp(1.6rem, 3vw, 2.1rem); font-weight: 800; line-height: 1.22;
    }
    .cwi-section--light .cwi-workflow__header h2 { color: var(--cwi-navy); }
    .cwi-section--dark .cwi-workflow__header h2 { color: #fff; }
    .cwi-workflow__header p { margin: 0; line-height: 1.65; }
    .cwi-section--light .cwi-workflow__header p { color: var(--cwi-slate); }
    .cwi-workflow__body {
        display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr);
        gap: 40px; align-items: center; max-width: 1100px; margin: 0 auto;
    }
    .cwi-workflow__visual {
        border-radius: 18px; overflow: hidden;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
        border: 1px solid #e3e9ef;
    }
    .cwi-workflow__visual img { width: 100%; height: auto; display: block; object-fit: cover; }
    .cwi-workflow__steps { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 16px; }
    .cwi-workflow__step {
        display: grid; grid-template-columns: 48px 52px 1fr; gap: 14px; align-items: start;
        background: #fff; border: 1px solid #e8eef3; border-radius: 14px; padding: 18px 16px;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
    }
    .cwi-section--dark .cwi-workflow__step {
        background: rgba(255, 255, 255, 0.06); border-color: rgba(125, 206, 168, 0.2);
    }
    .cwi-section--dark .cwi-workflow__step h3 { color: #fff; }
    .cwi-section--dark .cwi-workflow__step p { color: rgba(255, 255, 255, 0.72); }
    .cwi-workflow__step-num {
        width: 48px; height: 48px; border-radius: 50%; background: var(--cwi-green); color: #fff;
        display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;
    }
    .cwi-workflow__step-icon {
        width: 52px; height: 52px; border-radius: 12px; background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green); display: flex; align-items: center; justify-content: center; font-size: 24px;
    }
    .cwi-workflow__step h3 { margin: 0 0 6px; font-size: 1rem; font-weight: 700; color: var(--cwi-navy); }
    .cwi-workflow__step p { margin: 0; font-size: 0.88rem; line-height: 1.55; color: var(--cwi-slate); }

    /* Dashboard — reporting & hiring metrics */
    .cwi-dashboard { padding: 80px 0; }
    .cwi-dashboard__layout {
        display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.1fr);
        gap: 36px; align-items: center;
    }
    .cwi-dashboard__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--cwi-mint); margin-bottom: 10px;
    }
    .cwi-section--light .cwi-dashboard__eyebrow { color: var(--cwi-green); }
    .cwi-dashboard__copy h2 {
        margin: 0 0 12px; font-size: clamp(1.55rem, 2.8vw, 2rem); font-weight: 800; line-height: 1.25;
    }
    .cwi-section--dark .cwi-dashboard__copy h2 { color: #fff; }
    .cwi-section--light .cwi-dashboard__copy h2 { color: var(--cwi-navy); }
    .cwi-dashboard__copy > p { margin: 0 0 18px; line-height: 1.65; }
    .cwi-section--dark .cwi-dashboard__copy > p { color: rgba(255, 255, 255, 0.78); }
    .cwi-dashboard__highlights { list-style: none; margin: 0; padding: 0; }
    .cwi-dashboard__highlights li {
        display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px;
        font-size: 0.92rem; line-height: 1.5;
    }
    .cwi-section--dark .cwi-dashboard__highlights li { color: rgba(255, 255, 255, 0.85); }
    .cwi-dashboard__highlights i { color: var(--cwi-mint); margin-top: 2px; }
    .cwi-dashboard__panel { position: relative; }
    .cwi-dashboard__figure {
        border-radius: 16px; overflow: hidden; border: 1px solid rgba(125, 206, 168, 0.25);
        box-shadow: 0 24px 55px rgba(0, 0, 0, 0.35);
    }
    .cwi-dashboard__figure img { width: 100%; display: block; object-fit: cover; }
    .cwi-dashboard__metrics {
        display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px;
        margin-top: 16px;
    }
    .cwi-dashboard__metric {
        background: #fff; border-radius: 12px; padding: 16px 14px;
        border: 1px solid #e8eef3; text-align: center;
        box-shadow: 0 10px 28px rgba(15, 23, 42, 0.08);
    }
    .cwi-section--dark .cwi-dashboard__metric {
        background: rgba(255, 255, 255, 0.95);
    }
    .cwi-dashboard__metric-icon {
        width: 40px; height: 40px; margin: 0 auto 8px; border-radius: 10px;
        background: rgba(0, 96, 57, 0.1); color: var(--cwi-green);
        display: flex; align-items: center; justify-content: center; font-size: 20px;
    }
    .cwi-dashboard__metric strong {
        display: block; font-size: 1.15rem; font-weight: 800; color: var(--cwi-navy); margin-bottom: 2px;
    }
    .cwi-dashboard__metric span { font-size: 0.78rem; color: var(--cwi-slate); line-height: 1.35; }

    /* Dashboard — standout 3-column grid (workforce & talent) */
    .cwi-standout {
        padding: 80px 0;
        background: #eef2f6;
    }
    .cwi-standout__header {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 48px;
    }
    .cwi-standout__eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--cwi-green);
        margin-bottom: 10px;
    }
    .cwi-standout__header h2 {
        margin: 0;
        font-size: clamp(1.65rem, 3.2vw, 2.35rem);
        font-weight: 800;
        color: var(--cwi-navy);
        line-height: 1.2;
    }
    .cwi-standout__grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        align-items: stretch;
    }
    .cwi-standout__col--left,
    .cwi-standout__col--right {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    .cwi-standout__photo {
        margin: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 14px 36px rgba(15, 23, 42, 0.1);
    }
    .cwi-standout__photo img {
        width: 100%;
        display: block;
        object-fit: cover;
    }
    .cwi-standout__photo--landscape img {
        min-height: 200px;
        max-height: 240px;
    }
    .cwi-standout__col--right .cwi-standout__photo--landscape img {
        min-height: 220px;
        max-height: 260px;
    }
    .cwi-standout__card {
        background: #fff;
        border-radius: 12px;
        padding: 28px 24px;
        box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
        border: 1px solid #e8eef3;
    }
    .cwi-standout__card--tall {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }
    .cwi-standout__card-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green);
        font-size: 26px;
        margin-bottom: 18px;
    }
    .cwi-standout__card h3 {
        margin: 0 0 12px;
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--cwi-navy);
        line-height: 1.3;
    }
    .cwi-standout__card > p {
        margin: 0 0 18px;
        font-size: 0.92rem;
        line-height: 1.6;
        color: var(--cwi-slate);
    }
    .cwi-standout__list {
        list-style: none;
        margin: 0 0 24px;
        padding: 0;
    }
    .cwi-standout__list li {
        position: relative;
        padding-left: 22px;
        margin-bottom: 10px;
        font-size: 0.9rem;
        line-height: 1.5;
        color: var(--cwi-slate);
    }
    .cwi-standout__list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.45em;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--cwi-green);
    }
    .cwi-standout__cta-wrap {
        margin-top: auto;
        padding-top: 8px;
    }
    .cwi-standout__cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 28px;
        background: var(--cwi-green);
        color: #fff !important;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.25s ease, transform 0.25s ease;
    }
    .cwi-standout__cta:hover {
        background: #004d2e;
        color: #fff !important;
        transform: translateY(-1px);
    }

    /* Journey — succession & transformation */
    .cwi-journey { padding: 84px 0; }
    .cwi-journey__header { max-width: 760px; margin: 0 auto 44px; text-align: center; }
    .cwi-journey__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--cwi-green); margin-bottom: 10px;
    }
    .cwi-journey__header h2 {
        margin: 0 0 12px; font-size: clamp(1.6rem, 3vw, 2.1rem); font-weight: 800;
        color: var(--cwi-navy); line-height: 1.22;
    }
    .cwi-journey__header p { margin: 0; color: var(--cwi-slate); line-height: 1.65; }
    .cwi-journey__track {
        display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 20px;
        max-width: 1080px; margin: 0 auto; position: relative;
    }
    .cwi-journey__track::before {
        content: ''; position: absolute; top: 36px; left: 6%; right: 6%; height: 2px;
        background: linear-gradient(90deg, var(--cwi-green), var(--cwi-mint));
        z-index: 0;
    }
    .cwi-journey__phase { position: relative; z-index: 1; text-align: center; padding: 0 8px; }
    .cwi-journey__phase-marker {
        width: 72px; height: 72px; margin: 0 auto 16px; border-radius: 50%;
        background: #fff; border: 3px solid var(--cwi-green);
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        box-shadow: 0 10px 28px rgba(0, 96, 57, 0.15); position: relative;
    }
    .cwi-journey__phase-step {
        position: absolute; top: -8px; right: -4px; width: 26px; height: 26px; border-radius: 50%;
        background: var(--cwi-green); color: #fff; font-size: 0.7rem; font-weight: 800;
        display: flex; align-items: center; justify-content: center;
    }
    .cwi-journey__phase-marker i { font-size: 26px; color: var(--cwi-green); }
    .cwi-journey__phase-sub {
        margin: 0 0 6px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase;
        letter-spacing: 0.08em; color: var(--cwi-slate);
    }
    .cwi-journey__phase-body h3 {
        margin: 0 0 8px; font-size: 1rem; font-weight: 800; color: var(--cwi-green);
        text-transform: uppercase; letter-spacing: 0.03em;
    }
    .cwi-journey__phase-body p { margin: 0; font-size: 0.84rem; line-height: 1.55; color: var(--cwi-slate); }

    /* Card grid — staffing models, tools, plans */
    .cwi-card-grid { padding: 80px 0; }
    .cwi-card-grid__header { max-width: 720px; margin: 0 auto 36px; text-align: center; }
    .cwi-card-grid__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; margin-bottom: 10px;
    }
    .cwi-section--dark .cwi-card-grid__eyebrow { color: var(--cwi-mint); }
    .cwi-section--light .cwi-card-grid__eyebrow { color: var(--cwi-green); }
    .cwi-card-grid__header h2 {
        margin: 0 0 12px; font-size: clamp(1.55rem, 2.8vw, 2rem); font-weight: 800; line-height: 1.25;
    }
    .cwi-section--dark .cwi-card-grid__header h2 { color: #fff; }
    .cwi-section--light .cwi-card-grid__header h2 { color: var(--cwi-navy); }
    .cwi-card-grid__header p { margin: 0; line-height: 1.65; max-width: 640px; margin-inline: auto; }
    .cwi-section--dark .cwi-card-grid__header p { color: rgba(255, 255, 255, 0.78); }
    .cwi-card-grid__items {
        display: grid; gap: 20px;
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .cwi-card-grid--cols-4 .cwi-card-grid__items { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    .cwi-card-grid__card {
        position: relative; border-radius: 16px; padding: 28px 22px 24px;
        border: 1px solid rgba(125, 206, 168, 0.22);
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }
    .cwi-section--light .cwi-card-grid__card {
        background: #fff; border-color: #e3e9ef;
        box-shadow: 0 12px 36px rgba(15, 23, 42, 0.07);
    }
    .cwi-card-grid__card:hover { transform: translateY(-6px); }
    .cwi-card-grid__tag {
        position: absolute; top: 14px; right: 14px; font-size: 0.68rem; font-weight: 700;
        text-transform: uppercase; letter-spacing: 0.06em; padding: 4px 10px; border-radius: 999px;
        background: var(--cwi-mint); color: var(--cwi-navy);
    }
    .cwi-card-grid__icon {
        width: 56px; height: 56px; border-radius: 14px; margin-bottom: 16px;
        background: rgba(125, 206, 168, 0.15); color: var(--cwi-mint);
        display: flex; align-items: center; justify-content: center; font-size: 28px;
    }
    .cwi-section--light .cwi-card-grid__icon {
        background: rgba(0, 96, 57, 0.1); color: var(--cwi-green);
    }
    .cwi-card-grid__card h3 {
        margin: 0 0 10px; font-size: 1.05rem; font-weight: 700; line-height: 1.3;
    }
    .cwi-section--dark .cwi-card-grid__card h3 { color: #fff; }
    .cwi-section--light .cwi-card-grid__card h3 { color: var(--cwi-navy); }
    .cwi-card-grid__card p { margin: 0; font-size: 0.88rem; line-height: 1.55; }
    .cwi-section--dark .cwi-card-grid__card p { color: rgba(255, 255, 255, 0.72); }
    .cwi-section--light .cwi-card-grid__card p { color: var(--cwi-slate); }

    /* Monthly review — HRaaS */
    .cwi-monthly { padding: 80px 0; }
    .cwi-monthly__layout {
        display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 44px; align-items: center; max-width: 1080px; margin: 0 auto;
    }
    .cwi-monthly__visual {
        border-radius: 18px; overflow: hidden;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.1);
    }
    .cwi-monthly__visual img { width: 100%; display: block; object-fit: cover; }
    .cwi-monthly__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--cwi-green); margin-bottom: 10px;
    }
    .cwi-monthly__copy h2 {
        margin: 0 0 12px; font-size: clamp(1.55rem, 2.8vw, 2rem); font-weight: 800;
        color: var(--cwi-navy); line-height: 1.25;
    }
    .cwi-monthly__intro { margin: 0 0 22px; color: var(--cwi-slate); line-height: 1.65; }
    .cwi-monthly__agenda { list-style: none; margin: 0 0 24px; padding: 0; }
    .cwi-monthly__agenda li {
        display: grid; grid-template-columns: 48px 1fr; gap: 14px; align-items: start;
        padding: 14px 0; border-bottom: 1px solid #e8eef3;
    }
    .cwi-monthly__agenda li:last-child { border-bottom: none; }
    .cwi-monthly__agenda-icon {
        width: 48px; height: 48px; border-radius: 12px; background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green); display: flex; align-items: center; justify-content: center; font-size: 22px;
    }
    .cwi-monthly__agenda h3 { margin: 0 0 4px; font-size: 0.98rem; font-weight: 700; color: var(--cwi-navy); }
    .cwi-monthly__agenda p { margin: 0; font-size: 0.86rem; line-height: 1.5; color: var(--cwi-slate); }

    /* Monthly review — media split (HRaaS page) */
    .cwi-monthly-media {
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    .cwi-monthly-media::before,
    .cwi-monthly-media::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        opacity: 0.35;
    }
    .cwi-monthly-media::before {
        width: 280px; height: 280px;
        background: rgba(125, 206, 168, 0.25);
        top: 8%; left: -80px;
    }
    .cwi-monthly-media::after {
        width: 200px; height: 200px;
        background: rgba(0, 96, 57, 0.08);
        bottom: 10%; right: -40px;
    }
    .cwi-monthly-media__header {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 48px;
        position: relative;
        z-index: 1;
    }
    .cwi-monthly-media__eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--cwi-green);
        margin-bottom: 10px;
    }
    .cwi-monthly-media__header h2 {
        margin: 0;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 800;
        color: var(--cwi-navy);
        line-height: 1.22;
    }
    .cwi-monthly-media__body {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 48px;
        align-items: center;
        position: relative;
        z-index: 1;
    }
    .cwi-monthly-media__visual {
        position: relative;
        min-height: 420px;
    }
    .cwi-monthly-media__main-wrap {
        position: relative;
        max-width: 78%;
    }
    .cwi-monthly-media__main {
        width: 100%;
        display: block;
        border-radius: 12px;
        object-fit: cover;
        min-height: 380px;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
    }
    .cwi-monthly-media__quote {
        position: absolute;
        left: 0;
        bottom: -28px;
        max-width: 85%;
        background: var(--cwi-green);
        color: #fff;
        padding: 22px 24px 20px;
        border-radius: 8px;
        box-shadow: 0 16px 40px rgba(0, 96, 57, 0.25);
    }
    .cwi-monthly-media__quote p {
        margin: 0 0 10px;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.45;
        color: #fff;
    }
    .cwi-monthly-media__quote span {
        font-size: 0.78rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        opacity: 0.9;
    }
    .cwi-monthly-media__secondary {
        position: absolute;
        right: 0;
        top: 18%;
        width: 52%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.15);
        border: 4px solid #fff;
    }
    .cwi-monthly-media__secondary img {
        width: 100%;
        display: block;
        object-fit: cover;
        min-height: 160px;
    }
    .cwi-monthly-media__play {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(6, 13, 10, 0.35);
        color: #fff;
        font-size: 28px;
    }
    .cwi-monthly-media__play i {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--cwi-green);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .cwi-monthly-media__lead {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--cwi-navy);
        line-height: 1.55;
        margin: 0 0 16px;
    }
    .cwi-monthly-media__text {
        margin: 0 0 28px;
        color: var(--cwi-slate);
        line-height: 1.65;
    }
    .cwi-monthly-media__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px 24px;
        margin-bottom: 28px;
    }
    .cwi-monthly-media__grid-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }
    .cwi-monthly-media__grid-icon {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: rgba(0, 96, 57, 0.1);
        color: var(--cwi-green);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }
    .cwi-monthly-media__grid-item h3 {
        margin: 0 0 4px;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cwi-navy);
    }
    .cwi-monthly-media__grid-item p {
        margin: 0;
        font-size: 0.84rem;
        line-height: 1.5;
        color: var(--cwi-slate);
    }

    /* Payroll workflow — vertical tabs (workforce page only) */
    .cwi-payroll-tabs { padding: 80px 0; }
    .cwi-payroll-tabs__header {
        max-width: 720px; margin: 0 auto 36px; text-align: center;
    }
    .cwi-payroll-tabs__eyebrow {
        display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
        text-transform: uppercase; color: var(--cwi-green); margin-bottom: 10px;
    }
    .cwi-payroll-tabs__header h2 {
        margin: 0 0 12px; font-size: clamp(1.6rem, 3vw, 2.1rem); font-weight: 800;
        line-height: 1.22; color: var(--cwi-navy);
    }
    .cwi-payroll-tabs__header p { margin: 0; line-height: 1.65; color: var(--cwi-slate); }
    .cwi-payroll-tabs__panel { max-width: 1140px; margin: 0 auto; }
    .cwi-payroll-tabs .cwi-payroll-tabs__creote.tabs_all_box.type_one {
        --primary-color-one: #006039;
        --primary-color-two: #0f172a;
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tabs_header .toll_free {
        background: var(--cwi-green);
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tabs_header .toll_free a i {
        color: var(--cwi-green);
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tab_content::before {
        background: linear-gradient(to top, rgba(6, 13, 10, 0.92) 8%, rgba(6, 13, 10, 0.35) 55%, rgba(0, 0, 0, 0.15) 100%);
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tab_content .content_image h6 {
        font-size: clamp(1.1rem, 2vw, 1.5rem); line-height: 1.35;
        text-decoration: underline; text-underline-offset: 4px;
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tab_content .content_image h2 {
        font-size: clamp(1.75rem, 3.5vw, 2.5rem); line-height: 1.2;
    }
    .cwi-payroll-tabs .tabs_all_box.type_one .tab_content .content_image a:hover {
        color: var(--cwi-mint);
    }

    @media (max-width: 991.98px) {
        .cwi-workflow__body, .cwi-dashboard__layout, .cwi-monthly__layout,
        .cwi-monthly-media__body, .cwi-standout__grid { grid-template-columns: 1fr; }
        .cwi-standout__card--tall { min-height: auto; }
        .cwi-monthly-media__visual { min-height: 360px; margin-bottom: 24px; }
        .cwi-monthly-media__main-wrap { max-width: 100%; }
        .cwi-monthly-media__secondary {
            position: relative;
            right: auto;
            top: auto;
            width: 70%;
            margin: -40px 0 0 auto;
        }
        .cwi-monthly-media__grid { grid-template-columns: 1fr; }
        .cwi-journey__track { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .cwi-journey__track::before { display: none; }
        .cwi-card-grid__items, .cwi-card-grid--cols-4 .cwi-card-grid__items { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 575.98px) {
        .cwi-journey__track, .cwi-card-grid__items, .cwi-card-grid--cols-4 .cwi-card-grid__items { grid-template-columns: 1fr; }
        .cwi-dashboard__metrics { grid-template-columns: 1fr; }
    }
</style>
