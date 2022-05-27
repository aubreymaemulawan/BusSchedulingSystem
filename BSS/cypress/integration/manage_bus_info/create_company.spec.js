describe('Create New Company', () => {

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

  it('Add a new Company with an Active Status', () => {
    const pic = "company_logo.jpg"

    cy.get("#main-bus > .nav-link").click()
    cy.get('#menu-company').click()
    cy.get('.card-header > .btn').click()
    cy.get('#company_name').type('East-Westbound Terminals & Public Market')
    cy.get('#address').type('Saarenas Ave, Cagayan de Oro, 9000 Misamis Oriental')
    cy.get('#description').type('Market in Cagayan de Oro City')
    cy.get('#logo').attachFile(pic)
    cy.get('#is_active').select('Active')
    cy.get('#submit').click()
  })

})