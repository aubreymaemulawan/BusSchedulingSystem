// user_login.spec.js created with Cypress
//
// Start writing your Cypress tests below!
// If you're unfamiliar with how Cypress works,
// check out the link below and learn how to write your first test:
// https://on.cypress.io/writing-first-test

describe('User Login', () => {

  Cypress.on('uncaught:exception', (err, runnable) => {
    return false;
  });

  beforeEach('Go to Login BSATS page', () => {
    cy.visit('http://localhost:8000')
  })

  it('All required fields are filled out by Admin User', () => {
    cy.get('#email').type('Admin@email.com')
    cy.get('#password').type('admin123')
    cy.get('[type="checkbox"]').check({ force: true })
    cy.get("[type='submit']").click()
  })

  it('All required fields are filled out by Dispatch User', () => {
    cy.get('#email').type('Dispatch@email.com')
    cy.get('#password').type('dispatch123')
    cy.get('[type="checkbox"]').check({ force: true })
    cy.get("[type='submit']").click()
  })
  
})