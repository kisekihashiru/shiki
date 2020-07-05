<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   @foreach ($article as $article)
       <url>
           <loc>http://letsengineering.tech/article/{{ $article->id }}</loc>
           <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
           <changefreq>weekly</changefreq>
           <priority>0.9</priority>
       </url>
   @endforeach
</urlset>
