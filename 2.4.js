class Entity {
  constructor(/*private*/ validateFn) {
    this._validateFn = validateFn;
  }
}

class Person extends Entity {
  constructor(/*public*/ lastName = 'Doe', /*public*/ firstName = 'John') {
    super(() => this.firstName && this.lastName);
    this.firstName = firstName;
    this.lastName = lastName;
  }
  isValid() {
    return !!this._validateFn();
  }
}

let person = new Person();

if (person.isValid()) {
  personApi.create(person);
}
