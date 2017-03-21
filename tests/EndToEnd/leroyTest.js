module.exports = {
  'Let\'s buy a Drill!' : function (browser) {
    browser
      .url('http://www.leroymerlin.com.br/?region=grande_sao_paulo')
      .waitForElementVisible('body', 3000)
      .setValue('input#search', 'furadeira')
      .click('.btn-search')
      .assert.containsText('h1', 'Furadeiras')
      .click('#product-list a')
      .click('[data-button="ecommerce"]')
      .assert.urlContains('/carrinho')
      .end()
  }
};
