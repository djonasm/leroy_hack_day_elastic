module.exports = {
  'Let\'s buy a Drill!': function (browser) {
    browser
      .url('http://www.leroymerlin.com.br/?region=grande_sao_paulo')
      .waitForElementVisible('body', 3000)
      .setValue('#search', 'furadeira')
      .click('.btn-search')
      .assert.containsText('h1', 'Furadeiras')
      .element('css selector', '#product-list a', function (link) {
        this.elementIdElements(
          link.value.ELEMENT,
          'css selector',
          '.m-product-thumb-title',
          function (elements) {
            var productId = elements.value[0].ELEMENT;
            this.elementIdText(productId, function (result) {
              var productName = result.value;

              this.elementIdClick(productId)
                .assert.containsText('h1', productName)
                .click('[data-button=ecommerce]')
                .assert.urlContains('/carrinho')
                .assert.containsText('.column-product-info a', productName)
                .end();
            })
          });
      })
  }
};
