<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Jobs</loc>
        @if(!empty($articleJobs))
        <lastmod>{{ $articleJobs->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Results</loc>
        @if(!empty($articleResults))
        <lastmod>{{ $articleResults->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Admissions</loc>
        @if(!empty($articleAdmissions))
        <lastmod>{{ $articleAdmissions->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Syllabus</loc>
        @if(!empty($articleSyllabus))
        <lastmod>{{ $articleSyllabus->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Answer keys</loc>
        @if(!empty($articleAnswerKeys))
        <lastmod>{{ $articleAnswerKeys->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Admit Card</loc>
        @if(!empty($articleAdmitCard))
        <lastmod>{{ $articleAdmitCard->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Certificates</loc>
        @if(!empty($articleCertificates))
        <lastmod>{{ $articleCertificates->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Important</loc>
        @if(!empty($articleImportant))
        <lastmod>{{ $articleImportant->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
    <sitemap>
        <loc>https://saarkari.com/sitemap/latest/Downloads</loc>
        @if(!empty($articleDownloads))
        <lastmod>{{ $articleDownloads->created_at->tz('UTC')->toAtomString() }}</lastmod>
        @endif
    </sitemap>
</sitemapindex>
