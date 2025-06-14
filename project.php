import random
import string

def generate_password(length=8, use_letters=True, use_digits=True, use_symbols=True):
    characters = ''
    if use_letters:
        characters += string.ascii_letters
    if use_digits:
        characters += string.digits
    if use_symbols:
        characters += string.punctuation

    if not characters:
        return "Please select at least one character type."

    return ''.join(random.choice(characters) for _ in range(length))

# User input
length = int(input("Password length: "))
letters = input("Include letters? (y/n): ").lower() == 'y'
digits = input("Include digits? (y/n): ").lower() == 'y'
symbols = input("Include symbols? (y/n): ").lower() == 'y'

# Generate and show password
password = generate_password(length, letters, digits, symbols)
print("Your password:", password)
