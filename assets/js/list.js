// 講演実績
if($('body').hasClass('page-faq') || $('body').hasClass('page-menu-child')) {

  var faq = new Vue({
    el: '#v-faq',
    data: {
      reserves: [
        {
          question: '休診日はありますか？',
          answer: '年末年始などの一部を除きまして、基本的には休診日を設けておりません。尚、各クリニックとも、各医師の休診日がございます。医師を指名されたい場合につきましては、各クリニックに直接お問い合せください。'
        },
        {
          question: 'カウンセリングは無料ですか？',
          answer: '年末年始などの一部を除きまして、基本的には休診日を設けておりません。尚、各クリニックとも、各医師の休診日がございます。医師を指名されたい場合につきましては、各クリニックに直接お問い合せください。'
        },
        {
          question: 'カウンセリング予約のキャンセル料は発生しますか？',
          answer: '年末年始などの一部を除きまして、基本的には休診日を設けておりません。尚、各クリニックとも、各医師の休診日がございます。医師を指名されたい場合につきましては、各クリニックに直接お問い合せください。'
        },
        {
          question: 'ほげほげ',
          answer: 'ふがふが'
        }
      ],
      accesses: [
        {
          question: 'ほげほげ',
          answer: 'ほふがふが'
        },
        {
          question: 'ぱろぱろ',
          answer: 'ぱがぱが'
        },
        {
          question: 'ぐげぐげ',
          answer: 'ぐがぐが'
        },
        {
          question: 'もげもげ',
          answer: 'むがむが'
        }
      ],
      menus: [
        {
          question: 'ほげほげ',
          answer: 'ほふがふが'
        },
        {
          question: 'ぱろぱろ',
          answer: 'ぱがぱが'
        },
        {
          question: 'ぐげぐげ',
          answer: 'ぐがぐが'
        },
        {
          question: 'もげもげ',
          answer: 'むがむが'
        }
      ],
      prices: [
        {
          question: 'ほげほげ',
          answer: 'ほふがふが'
        },
        {
          question: 'ぱろぱろ',
          answer: 'ぱがぱが'
        },
        {
          question: 'ぐげぐげ',
          answer: 'ぐがぐが'
        },
        {
          question: 'もげもげ',
          answer: 'むがむが'
        }
      ],
      others: [
        {
          question: 'ほげほげ',
          answer: 'ほふがふが'
        },
        {
          question: 'ぱろぱろ',
          answer: 'ぱがぱが'
        },
        {
          question: 'ぐげぐげ',
          answer: 'ぐがぐが'
        },
        {
          question: 'もげもげ',
          answer: 'むがむが'
        }
      ]
    }
  });
}
