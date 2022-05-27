describe('User Login', () => {

  Cypress.on('uncaught:exception', (err, runnable) => {
    return false;
  });

  beforeEach('Login as Admin', () => {
    cy.visit('http://localhost:8000/')
    cy.get('#email').type('Admin@email.com')
    cy.get('#password').type('admin123')
    cy.get('[type="checkbox"]').check({ force: true })
    cy.get("[type='submit']").click()
  })

  it.skip('Add new bus when company list is empty', () => { //
    cy.get("#main-bus > .nav-link").click()
    cy.get('#menu-bus').click()
    cy.get('.card-header > .btn').click()
    cy.get('.bootbox > .modal-dialog > .modal-content > .modal-footer > .btn').wait(2000).click()
  })

  it('Add new airconditioned bus when company list is not empty', () => {
    cy.get("#main-bus > .nav-link").click()
    cy.get('#menu-bus').click()
    cy.get('.card-header > .btn').click()
    cy.get('#bus_no').type('100210')
    cy.get('#bustype_id').select('Airconditioned')
    cy.get('#company_id').select('E')
    cy.get('#plate_no').type('AYO9343')
    cy.get('#chassis_no').type('123ABCDEFGHIJKLMN')
    cy.get('#engine_no').type('BRUH12345678')
    cy.get('#is_active').select('Active')
    cy.get('#edit').click()
  })

})