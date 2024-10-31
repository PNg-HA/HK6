def load_binary_string(file_path):
    with open(file_path, 'r') as file:
        binary_string = file.read().strip()
    return binary_string

def binary_to_ascii(binary_string):
    ascii_string = "".join(chr(int(binary_string[i:i+8], 2)) for i in range(0, len(binary_string), 8))
    return ascii_string

def main():
    file_path = "output.txt"
    binary_string = load_binary_string(file_path)
    ascii_string = binary_to_ascii(binary_string)
    print(ascii_string)

if __name__ == "__main__":
    main()
