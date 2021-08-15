window.onload = function () {

    white = 'rgba(245, 245, 245, 0.9)';

    if (localStorage.getItem('bgcolor') != null) {
        let color = localStorage.getItem('bgcolor');
        let color_link = localStorage.getItem('link_color');
        let color_p = localStorage.getItem('p_color');
        let color_pre = localStorage.getItem('pre_color');
        let color_h = localStorage.getItem('h_color');
        let color_label = localStorage.getItem('label_color');
        let color_td = localStorage.getItem('td_color');
        document.getElementsByTagName('body')[0].style.background = color;
        for (let index = 0; index < document.getElementsByTagName('a').length; index++) {
            document.getElementsByTagName('a')[index].style.color = color_link;
        }
        for (let index = 0; index < document.getElementsByTagName('p').length; index++) {
            document.getElementsByTagName('p')[index].style.color = color_p;
        }
        for (let index = 0; index < document.getElementsByTagName('pre').length; index++) {
            document.getElementsByTagName('pre')[index].style.color = color_pre;
        }
        for (let index = 0; index < document.getElementsByTagName('h1').length; index++) {
            document.getElementsByTagName('h1')[index].style.color = color_h;
        }
        for (let index = 0; index < document.getElementsByTagName('h2').length; index++) {
            document.getElementsByTagName('h2')[index].style.color = color_h;
        }
        for (let index = 0; index < document.getElementsByTagName('h3').length; index++) {
            document.getElementsByTagName('h3')[index].style.color = color_h;
        }
        for (let index = 0; index < document.getElementsByTagName('label').length; index++) {
            document.getElementsByTagName('label')[index].style.color = color_label;
        }
        for (let index = 0; index < document.getElementsByTagName('td').length; index++) {
            document.getElementsByTagName('td')[index].style.color = td_label;
        }



    }

    document.getElementById('Light').onclick = function () {
        document.getElementsByTagName('body')[0].style.background = 'whitesmoke';
        localStorage.setItem('bgcolor', 'whitesmoke');
        for (let index = 0; index < document.getElementsByTagName('a').length; index++) {
            document.getElementsByTagName('a')[index].style.color = 'black';
        }
        localStorage.setItem('link_color', 'black');
        for (let index = 0; index < document.getElementsByTagName('p').length; index++) {
            document.getElementsByTagName('p')[index].style.color = 'black';
        }
        localStorage.setItem('p_color', 'black');
        for (let index = 0; index < document.getElementsByTagName('pre').length; index++) {
            document.getElementsByTagName('pre')[index].style.color = 'black';
        }
        localStorage.setItem('pre_color', 'black');
        for (let index = 0; index < document.getElementsByTagName('h1').length; index++) {
            document.getElementsByTagName('h1')[index].style.color = 'black';
        }
        for (let index = 0; index < document.getElementsByTagName('h2').length; index++) {
            document.getElementsByTagName('h2')[index].style.color = 'black';
        }
        for (let index = 0; index < document.getElementsByTagName('h3').length; index++) {
            document.getElementsByTagName('h3')[index].style.color = 'black';
        }
        localStorage.setItem('h_color', 'black');
        for (let index = 0; index < document.getElementsByTagName('label').length; index++) {
            document.getElementsByTagName('label')[index].style.color = 'black';
        }
        localStorage.setItem('label_color', 'black');
        for (let index = 0; index < document.getElementsByTagName('td').length; index++) {
            document.getElementsByTagName('td')[index].style.color = 'black';
        }
        localStorage.setItem('td', 'black');

    }


    document.getElementById('Dark').onclick = function () {
        console.log('ok');
        document.getElementsByTagName('body')[0].style.background = 'rgb(29, 29, 31)';
        localStorage.setItem('bgcolor', 'rgb(29, 29, 31)');
        for (let index = 0; index < document.getElementsByTagName('a').length; index++) {
            document.getElementsByTagName('a')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('link_color', 'rgba(245, 245, 245, 0.9)');
        for (let index = 0; index < document.getElementsByTagName('p').length; index++) {
            document.getElementsByTagName('p')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('p_color', 'rgba(245, 245, 245, 0.9)');
        for (let index = 0; index < document.getElementsByTagName('pre').length; index++) {
            document.getElementsByTagName('pre')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('pre_color', 'rgba(245, 245, 245, 0.9)');
        for (let index = 0; index < document.getElementsByTagName('h1').length; index++) {
            document.getElementsByTagName('h1')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        for (let index = 0; index < document.getElementsByTagName('h2').length; index++) {
            document.getElementsByTagName('h2')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        for (let index = 0; index < document.getElementsByTagName('h3').length; index++) {
            document.getElementsByTagName('h3')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('h_color', 'rgba(245, 245, 245, 0.9)');
        for (let index = 0; index < document.getElementsByTagName('label').length; index++) {
            document.getElementsByTagName('label')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('label_color', 'rgba(245, 245, 245, 0.9)');
        for (let index = 0; index < document.getElementsByTagName('td').length; index++) {
            document.getElementsByTagName('td')[index].style.color = 'rgba(245, 245, 245, 0.9)';
        }
        localStorage.setItem('td', 'rgba(245, 245, 245, 0.9)');

    }
}