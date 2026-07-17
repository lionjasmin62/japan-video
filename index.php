<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmazingVideos Japan | 話題のバイラル日本動画ポータル</title>
    <script src="https://tailwindcss.com"></script>
    <style>
        .modal { transition: opacity 0.25s ease; }
        body { background-color: #0f0f0f; color: #f1f1f1; }
    </style>
</head>
<body class="font-sans antialiased min-h-screen flex flex-col">

    <!-- ヘッダー / ナビゲーション -->
    <header class="sticky top-0 z-40 bg-[#0f0f0f] border-b border-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="showPage('home')">
                <span class="text-2xl">🇯🇵</span>
                <span class="font-black text-xl tracking-tight text-white">AMAZING<span class="text-red-500">VIDEOS</span>.JP</span>
            </div>
            
            <!-- 検索バー -->
            <div class="hidden sm:block flex-1 max-w-md mx-8">
                <div class="relative">
                    <input type="text" id="searchBar" onkeyup="filterVideos()" placeholder="日本の動画を検索..." class="w-full bg-[#222] text-white border border-gray-700 rounded-full py-1.5 px-4 pl-10 focus:outline-none focus:border-red-500 text-sm">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </div>
            </div>

            <!-- ナビゲーションリンク -->
            <nav class="flex items-center space-x-4 text-xs font-semibold tracking-wider text-gray-400">
                <button onclick="showPage('home')" class="hover:text-white transition">ホーム</button>
                <button onclick="showPage('disclaimer')" class="hover:text-white transition">免責事項</button>
                <button onclick="showPage('privacy')" class="hover:text-white transition">プライバシーポリシー</button>
                <button onclick="showPage('terms')" class="hover:text-white transition">利用規約</button>
            </nav>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
        
        <!-- ================= ホームセクション ================= -->
        <section id="page-home" class="page-section">
            <!-- カテゴリフィルター -->
            <div class="flex flex-wrap gap-2 mb-8" id="category-filters">
                <button onclick="filterCategory('all')" class="cat-btn px-4 py-1.5 bg-red-600 text-white rounded-full text-xs font-medium transition">すべての動画</button>
                <button onclick="filterCategory('culture')" class="cat-btn px-4 py-1.5 bg-[#222] text-gray-300 hover:bg-[#333] rounded-full text-xs font-medium transition">文化・祭り</button>
                <button onclick="filterCategory('travel')" class="cat-btn px-4 py-1.5 bg-[#222] text-gray-300 hover:bg-[#333] rounded-full text-xs font-medium transition">自然・旅行</button>
                <button onclick="filterCategory('tech')" class="cat-btn px-4 py-1.5 bg-[#222] text-gray-300 hover:bg-[#333] rounded-full text-xs font-medium transition">技術・ガジェット</button>
                <button onclick="filterCategory('food')" class="cat-btn px-4 py-1.5 bg-[#222] text-gray-300 hover:bg-[#333] rounded-full text-xs font-medium transition">B級グルメ・屋台</button>
            </div>

            <!-- 動画グリッド -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="video-grid">
                <!-- 動画カード 1 -->
                <div class="video-card group cursor-pointer bg-[#171717] rounded-xl overflow-hidden border border-gray-800 hover:border-gray-700 transition duration-200" data-category="culture" data-title="京都 祇園祭 山鉾巡行 ハイライト 伝統 文化">
                    <div class="relative aspect-video bg-gray-800 overflow-hidden" onclick="playVideo('https://youtube.com', '京都 祇園祭 山鉾巡行 ハイライト')">
                        <img src="https://unsplash.com" alt="Kyoto" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute bottom-2 right-2 bg-black/80 px-2 py-0.5 rounded text-[10px] font-bold">12:40</span>
                    </div>
                    <div class="p-3">
                        <h3 class="font-bold text-sm text-white line-clamp-2 group-hover:text-red-400 transition">京都 祇園祭 山鉾巡行 圧巻のハイライト映像</h3>
                        <p class="text-xs text-gray-400 mt-1">文化・祭り</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">14.5万回視聴 • 2日前</p>
                    </div>
                </div>

                <!-- 動画カード 2 -->
                <div class="video-card group cursor-pointer bg-[#171717] rounded-xl overflow-hidden border border-gray-800 hover:border-gray-700 transition duration-200" data-category="travel" data-title="東京 ネオン ナイト 散策 ツアー 新宿 渋谷 夜景">
                    <div class="relative aspect-video bg-gray-800 overflow-hidden" onclick="playVideo('https://youtube.com', '東京ネオンナイト：渋谷＆新宿散策')">
                        <img src="https://unsplash.com" alt="Tokyo" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute bottom-2 right-2 bg-black/80 px-2 py-0.5 rounded text-[10px] font-bold">18:15</span>
                    </div>
                    <div class="p-3">
                        <h3 class="font-bold text-sm text-white line-clamp-2 group-hover:text-red-400 transition">東京ネオンナイト：新宿・渋谷シネマティック散策ツアー</h3>
                        <p class="text-xs text-gray-400 mt-1">自然・旅行</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">82万回視聴 • 1週間前</p>
                    </div>
                </div>

                <!-- 動画カード 3 -->
                <div class="video-card group cursor-pointer bg-[#171717] rounded-xl overflow-hidden border border-gray-800 hover:border-gray-700 transition duration-200" data-category="tech" data-title="日本 新幹線 リニア モーターカー 驚異の技術">
                    <div class="relative aspect-video bg-gray-800 overflow-hidden" onclick="playVideo('https://youtube.com', '時速500km！日本の次世代リニア新幹線の裏側')">
                        <img src="https://unsplash.com" alt="Bullet Train" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute bottom-2 right-2 bg-black/80 px-2 py-0.5 rounded text-[10px] font-bold">08:50</span>
                    </div>
                    <div class="p-3">
                        <h3 class="font-bold text-sm text-white line-clamp-2 group-hover:text-red-400 transition">潜入！時速500kmを超える日本の新型リニア新幹線</h3>
                        <p class="text-xs text-gray-400 mt-1">技術・ガジェット</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">120万回視聴 • 3日前</p>
                    </div>
                </div>

                <!-- 動画カード 4 -->
                <div class="video-card group cursor-pointer bg-[#171717] rounded-xl overflow-hidden border border-gray-800 hover:border-gray-700 transition duration-200" data-category="food" data-title="大阪 伝説のストリートフード たこ焼き 職人 技">
                    <div class="relative aspect-video bg-gray-800 overflow-hidden" onclick="playVideo('https://youtube.com', '大阪・伝説のたこ焼き職人の神ワザ')">
                        <img src="https://unsplash.com" alt="Street Food" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute bottom-2 right-2 bg-black/80 px-2 py-0.5 rounded text-[10px] font-bold">14:22</span>
                    </div>
                    <div class="p-3">
                        <h3 class="font-bold text-sm text-white line-clamp-2 group-hover:text-red-400 transition">大阪・伝説の屋台グルメ：超高速で焼き上げるたこ焼き職人</h3>
                        <p class="text-xs text-gray-400 mt-1">B級グルメ・屋台</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">340万回視聴 • 1ヶ月前</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= 免責事項セクション ================= -->
        <section id="page-disclaimer" class="page-section hidden max-w-3xl mx-auto bg-[#171717] p-8 rounded-2xl border border-gray-800">
            <h1 class="text-3xl font-black text-white mb-6 border-b border-gray-800 pb-3">免責事項</h1>
            <div class="text-sm text-gray-300 space-y-4 leading-relaxed">
                <p class="font-bold text-yellow-500">最終更新日: 2026年7月17日</p>
                <p>AmazingVideos Japan（以下、「当サービス」）が提供する情報およびコンテンツは、主に一般的な娯楽、教育、および情報提供のみを目的として設計されています。</p>
                <p><strong>動画のキュレーションに関する通知：</strong> 当サービスはオープンなコンテンツ発見プラットフォームとして運営されています。本ウェブサイトに表示される一部の動画は、外部のパブリック動画共有プラットフォーム（YouTube、Vimeo、Twitch等を含みますがこれらに限定されません）を介して直接集約、キュレーション、または埋め込みが行われています。当サービスのサーバー上に動画ファイルを直接ホストしているわけではありません。</p>
                <p><strong>責任の制限：</strong> 当サービスのオーナーまたは運営者は、契約上の行為、過失、またはその他の不法行為であるかを問わず、当サービスまたは表示される動画コンテンツの利用に起因して生じた、いかなる特別な、直接的な、間接的な、結果的な、または付随的な損害、あるいはその他のあらゆる損害について、一切の責任を負わないものとします。</p>
            </div>
        </section>

        <!-- ================= プライバシーポリシー ================= -->
        <section id="page-privacy" class="page-section hidden max-w-3xl mx-auto bg-[#171717] p-8 rounded-2xl border border-gray-800">
            <h1 class="text-3xl font-black text-white mb-6 border-b border-gray-800 pb-3">プライバシーポリシー</h1>
            <div class="text-sm text-gray-300 space-y-4 leading-relaxed">
                <p class="font-bold text-red-400">発効日: 2026年7月17日</p>
                <p>AmazingVideos Japanは、ユーザーの皆様のオンライン上のプライバシーを尊重し、重視しています。本ポリシーでは、当シングルページアプリケーションがユーザーデータをどのように取り扱うかについて詳しく説明します。</p>
                <h2 class="text-lg font-bold text-white mt-4">1. 収集する情報</h2>
                <p>当サイトは主に埋め込みメディアの閲覧ポータルとして機能しているため、ユーザーアカウントの作成、メールアドレスの登録、またはログイン情報の入力を求めることはありません。個人を特定できる情報（PII）の追跡は一切行っておりません。</p>
                <h2 class="text-lg font-bold text-white mt-4">2. クッキーおよびサードパーティ製の埋め込みプレイヤー</h2>
                <p>本ウェブサイトは、YouTubeなどの外部プラットフォームの動画フレームワークを埋め込んでいます。これらのサードパーティメディアネットワークは、各社のプライバシーガイドラインに従って、トラッキングクッキーの配置、テレメトリの収集、またはウェブ上での動画エンゲージメント習慣の追跡を行う場合があります。</p>
                <h2 class="text-lg font-bold text-white mt-4">3. データ分析</h2>
                <p>月間のプラットフォームトラフィック量を測定するために、基本的なサーバーログや匿名の分析カウンターを使用する場合があります。この計算プロセス中に、個人を特定できる追跡ログが保存されることはありません。</p>
            </div>
        </section>

        <!-- ================= 利用規約 ================= -->
        <section id="page-terms" class="page-section hidden max-w-3xl mx-auto bg-[#171717] p-8 rounded-2xl border border-gray-800">
            <h1 class="text-3xl font-black text-white mb-6 border-b border-gray-800 pb-3">利用規約</h1>
            <div class="text-sm text-gray-300 space-y-4 leading-relaxed">
                <p class="font-bold text-red-400">最終改定日: 2026年7月17日</p>
                <p>AmazingVideos Japanへようこそ。本プラットフォームを閲覧または利用することにより、お客様は以下に概説する規約および条件に完全に同意し、これらに拘束されることに同意したものとみなされます。</p>
                <h2 class="text-lg font-bold text-white mt-4">1. 利用ライセンス</h2>
                <p>ユーザーは、個人的な非商業的娯楽目的の視聴に限定して、当サイト上のメディアストリームにアクセスする許可を与えられます。事前の承諾なしに、データをスクレイピングすること、コードレイアウトを複製すること、または本ウェブサイトプラットフォームを再配布することは禁止されています。</p>
                <h2 class="text-lg font-bold text-white mt-4">2. 外部リンクおよび埋め込み</h2>
                <p>AmazingVideos Japanには、外部のリンク先ウェブサイトへ誘導する埋め込み動画やリンクが含まれています。当サービスは、それらの外部スペースの流動的なコンテンツ、安全基準、または利用規約について一切の管理権限を持たず、いかなる責任も負いません。</p>
                <h2 class="text-lg font-bold text-white mt-4">3. 規約の改定</h2>
                <p>当サービスは、独自の裁量により、これらの規約をいつでも修正または更新する全権限を留保します。規約改定後に当サイトを引き続き訪問された場合は、改定後の最新の規約に正式に同意したものとみなされます。</p>
            </div>
        </section>
    </main>

    <!-- 動画プレイヤーモーダル -->
    <div id="videoModal" class="modal fixed inset-0 z-50 overflow-auto bg-black/90 flex items-center justify-center opacity-0 pointer-events-none">
        <div class="w-full max-w-4xl mx-4 bg-[#111] rounded-2xl overflow-hidden border border-gray-800 shadow-2xl relative">
            <button onclick="closeVideo()" class="absolute top-4 right-4 z-50 text-white/70 hover:text-white bg-black/40 rounded-full p-2 hover:bg-black/60 transition">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <div class="relative aspect-video w-full bg-black">
                <iframe id="modalPlayer" class="absolute top-0 left-0 w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="p-6">
                <h2 id="modalVideoTitle" class="text-xl font-bold text-white">動画プレイヤー</h2>
                <p class="text-xs text-gray-400 mt-2">サードパーティの埋め込みサーバーフレームワークを介して配信中。</p>
            </div>
        </div>
    </div>

    <!-- フッター -->
    <footer class="bg-[#0f0f0f] border-t border-gray-800 mt-12 py-8 text-center text-xs text-gray-500">
        <p class="mb-4">&copy; 2026 AmazingVideos Japan. All rights reserved.</p>
        <div class="flex justify-center space-x-6">
            <button onclick="showPage('disclaimer')" class="hover:text-white transition">免責事項</button>
            <button onclick="showPage('privacy')" class="hover:text-white transition">プライバシーポリシー</button>
            <button onclick="showPage('terms')" class="hover:text-white transition">利用規約</button>
        </div>
    </footer>

    <!-- スクリプト制御ロジック -->
    <script>
        function showPage(pageId) {
            document.querySelectorAll('.page-section').forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById('page-' + pageId).classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function filterVideos() {
            const query = document.getElementById('searchBar').value.toLowerCase();
            const cards = document.querySelectorAll('.video-card');
            
            cards.forEach(card => {
                const searchTags = card.getAttribute('data-title');
                if(searchTags.includes(query)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        function filterCategory(category) {
            document.querySelectorAll('.cat-btn').forEach(btn => {
                btn.classList.remove('bg-red-600', 'text-white');
                btn.classList.add('bg-[#222]', 'text-gray-300');
            });
            event.currentTarget.classList.remove('bg-[#222]', 'text-gray-300');
            event.currentTarget.classList.add('bg-red-600', 'text-white');

            const cards = document.querySelectorAll('.video-card');
            cards.forEach(card => {
                if(category === 'all' || card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        function playVideo(embedUrl, videoTitle) {
            const modal = document.getElementById('videoModal');
            const player = document.getElementById('modalPlayer');
            const titleElem = document.getElementById('modalVideoTitle');

            titleElem.innerText = videoTitle;
            player.src = embedUrl;

            modal.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
        }

        function closeVideo() {
            const modal = document.getElementById('videoModal');
            const player = document.getElementById('modalPlayer');

            modal.classList.add('opacity-0', 'pointer-events-none');
            player.src = "";
            document.body.style.overflow = '';
        }
    </script>
</body>
</html>
