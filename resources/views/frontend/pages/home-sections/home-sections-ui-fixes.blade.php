{{-- Targeted UI fixes: icon sizes, 8px radius, HR OS hub position, bento grid typography --}}
<style>
   /* Image 1 — Why Mirashka: larger card icons */
   .mirashka-home .home-why-mirashka__card-icon {
      width: 56px !important;
      height: 56px !important;
      font-size: 2.25rem !important;
      margin-bottom: 16px !important;
   }

   /* Image 2 — Growth Reality: 8px corners (pills included) */
   .mirashka-home .home-growth-reality__shell,
   .mirashka-home .home-growth-reality__label-pill,
   .mirashka-home .home-growth-reality__solution,
   .mirashka-home .home-growth-reality__solution-icon,
   .mirashka-home .home-growth-reality__pain-item {
      border-radius: var(--mh-radius, 8px) !important;
   }

   /* HR OS hub label + Growth Reality timeline stage labels */
   .mirashka-home .home-hr-os__hub strong {
      font-size: 0.875rem !important;
      letter-spacing: 0.06em !important;
      line-height: 1.3 !important;
   }
   .mirashka-home .home-growth-reality__timeline-step {
      font-size: 0.8125rem !important;
   }
   @media (max-width: 640px) {
      .mirashka-home .home-hr-os__hub strong {
         font-size: 0.8125rem !important;
      }
   }

   /* Image 3 — HR OS: 8px corners + hub above pillar cards */
   .mirashka-home .home-hr-os__eyebrow,
   .mirashka-home .home-hr-os__hub,
   .mirashka-home .home-hr-os__node,
   .mirashka-home .home-hr-os__node-icon {
      border-radius: var(--mh-radius, 8px) !important;
   }
   .mirashka-home .home-hr-os__hub {
      top: -22px !important;
   }
   .mirashka-home .home-hr-os__constellation {
      padding-top: 20px !important;
   }
   .mirashka-home .home-hr-os__nodes {
      padding-top: 72px !important;
   }
   .mirashka-home .home-hr-os__connector {
      top: 54px !important;
   }
   .mirashka-home .home-hr-os__node-dot {
      top: -58px !important;
   }
   @media (max-width: 1100px) {
      .mirashka-home .home-hr-os__hub {
         top: auto !important;
      }
      .mirashka-home .home-hr-os__nodes {
         padding-top: 0 !important;
      }
   }

   /* Image 4 — Pillar 01 bento: center service boxes match section type */
   .mirashka-home .home-pillar--bento .home-pillar__bento-svc strong {
      font-size: var(--mh-h3) !important;
      font-weight: 700 !important;
      line-height: var(--mh-lh-tight) !important;
      margin-bottom: 6px !important;
   }
   .mirashka-home .home-pillar--bento .home-pillar__bento-svc span {
      font-size: var(--mh-body) !important;
      line-height: var(--mh-lh-body) !important;
      color: #475569 !important;
   }

   /* Images 4–8 — Pillars: 8px on rounded UI (keep circles) */
   .mirashka-home .home-pillars .home-pillar__label,
   .mirashka-home .home-pillars .home-pillar__media,
   .mirashka-home .home-pillars .home-pillar__media-badge,
   .mirashka-home .home-pillars .home-pillar__mosaic-item,
   .mirashka-home .home-pillars .home-pillar__mosaic-item i,
   .mirashka-home .home-pillars .home-wfm-hub,
   .mirashka-home .home-pillars .home-wfm-hub__visual-badge,
   .mirashka-home .home-pillars .home-wfm-hub__visual-caption,
   .mirashka-home .home-pillars .home-wfm-hub__item,
   .mirashka-home .home-pillars .home-wfm-hub__item-icon,
   .mirashka-home .home-pillars .home-talent-spine__deck,
   .mirashka-home .home-pillars .home-talent-spine__cell,
   .mirashka-home .home-pillars .home-talent-spine__cell-icon,
   .mirashka-home .home-pillars .home-hraas-suite__panel,
   .mirashka-home .home-pillars .home-hraas-suite__item,
   .mirashka-home .home-pillars .home-hraas-suite__item-icon,
   .mirashka-home .home-pillars .home-hraas-suite__aside-cap,
   .mirashka-home .home-pillars .home-pillar__bento-photo,
   .mirashka-home .home-pillars .home-pillar__bento-tile,
   .mirashka-home .home-pillars .home-pillar__bento-main,
   .mirashka-home .home-pillars .home-pillar__bento-svc {
      border-radius: var(--mh-radius, 8px) !important;
   }

   .mirashka-home .home-why-mirashka__center img {
      border-radius: var(--mh-radius, 8px) !important;
   }

   /* Pillar 01 bento — side columns flex; photos grow, no dead space */
   .mirashka-home .home-pillar--bento .home-pillar__bento {
      align-items: stretch !important;
   }
   .mirashka-home .home-pillar--bento .home-pillar__bento-col {
      display: flex !important;
      flex-direction: column !important;
      gap: 10px !important;
      min-height: 0 !important;
   }
   .mirashka-home .home-pillar--bento .home-pillar__bento-col .home-pillar__bento-photo {
      flex: 1 1 0 !important;
      min-height: 140px !important;
      display: flex !important;
      flex-direction: column !important;
      aspect-ratio: unset !important;
   }
   .mirashka-home .home-pillar--bento .home-pillar__bento-col .home-pillar__bento-tile {
      flex: 0 0 auto !important;
      height: auto !important;
   }
   .mirashka-home .home-pillar--bento .home-pillar__bento-photo img {
      flex: 1 1 auto !important;
      width: 100% !important;
      height: 100% !important;
      min-height: 0 !important;
      object-fit: cover !important;
   }
</style>
