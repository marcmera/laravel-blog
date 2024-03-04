describe('Login Attempt Test', () => {
  it('should pass when user attempts to log in', () => {

    cy.visit('http://127.0.0.1:8000/login')

    cy.url().should('include', '/login')

    cy.get('input[name="email"]').type('test-email')
    cy.get('input[name="password"]').type('test-passwd')

    cy.get('button[type="submit"]').click()

    cy.url().should('eq', 'http://127.0.0.1:8000/dashboard')
  })

  it('should fail when user attempts to log in with invalid credentials', () => {

    cy.visit('http://127.0.0.1:8000/login')

    cy.url().should('include', '/login')

    cy.get('input[name="email"]').type('a@a.com')
    cy.get('input[name="password"]').type('1234')

    cy.get('button[type="submit"]').click()

    cy.url().should('not.eq', 'http://127.0.0.1:8000/dashboard')

    cy.get('li').should('contain', 'These credentials do not match our records.')
  })
})