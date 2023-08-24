$(function () {
        let api = 'api.php';
        
         let updateMoscowWeather = function () {
            let request = { 'url': 'https://pogoda.mail.ru/prognoz/ufa/' };
            $.get(api, request, function (response) {
                let result = $(response).find('.information__content__temperature').text();
                $('#ufa-weather > .value').text(result + "C");
            });
            //+25&deg;C
        }


        let updateUsdCourse = function () {
            let request = { 'url': 'https://www.cbr.ru/' };
            $.get(api, request, function (response) {
                let result = $(response).find('._dollar + div').text();
                $('#usd-course > .value').text(result);
            });
            //90,3380 ₽
        }

      

        let updateRuWikiArticlesCount = function () {
            let request = { 'url': 'https://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B0%D1%8F_%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F' };
            $.get(api, request, function (response) {
                let result = $(response).find('[title="Служебная:Статистика"]').first().text();
                $('#ruwiki-articles-count > .value').text(result);
            });
            //1 926 085
        }

        let updateSiteStatus = function () {
            let request = { 'url': 'https://alex-verstak.ru/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('Полезные ссылки') > 0 ? 'Работает' : 'Сломался';
                $('#site-status > .value').text(result);
            });
            //Работает
        }
        
          let updateVkStatus = function () {
            let request = { 'url': 'https://vk.com/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('.FlatButton__in') > 1 ? 'Работает' : 'Сломался';
                $('#vk-status > .value').text(result);
            });
            //Работает
        }
          let updateOkStatus = function () {
            let request = { 'url': 'https://ok.ru/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('.button-pro.__wide') > 1 ? 'Работает' : 'Сломался';
                $('#ok-status > .value').text(result);
            });
            //Работает
        }
          let updateMailStatus = function () {
            let request = { 'url': 'https://mail.ru/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('Полезные ссылки') > 0 ? 'Работает' : 'Сломался';
                $('#mail-status > .value').text(result);
            });
            //Работает
        }
          let updateOzonStatus = function () {
            let request = { 'url': 'https://www.ozon.ru/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('Полезные ссылки') > 0 ? 'Работает' : 'Сломался';
                $('#ozon-status > .value').text(result);
            });
            //Работает
        }
          let updateYoutubeStatus = function () {
            let request = { 'url': 'https://www.youtube.com/' };
            $.get(api, request, function (response) {
                let result = response.indexOf('Полезные ссылки') > 0 ? 'Работает' : 'Сломался';
                $('#youtube-status > .value').text(result);
            });
            //Работает
        }

        let updateAllData = function () {
            updateUsdCourse();
            updateMoscowWeather();
            updateRuWikiArticlesCount();
            updateSiteStatus();
            updateVkStatus();
            updateOkStatus();
            updateMailStatus();
            updateOzonStatus();
            updateYoutubeStatus();
        }

        updateAllData();
        setInterval(updateAllData, 300000);
    });
    
