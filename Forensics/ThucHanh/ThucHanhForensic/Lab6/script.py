from PIL import Image

def extract_lsb(image_path):
    # Open the image
    img = Image.open(image_path)
    img = img.convert("RGB")
    width, height = img.size

    # Array to store the extracted LSBs
    lsb_bits = []

    # Extract LSBs in BGR order, right to left, bottom up
    for y in range(height - 1, -1, -1):
        for x in range(width - 1, -1, -1):
            r, g, b = img.getpixel((x, y))
            lsb_bits.append(b & 1)
            lsb_bits.append(g & 1)
            lsb_bits.append(r & 1)
            if len(lsb_bits) >= 572:
                break
        if len(lsb_bits) >= 572:
            break

    # Flip the bits (0 to 1 and 1 to 0)
    flipped_bits = [bit ^ 1 for bit in lsb_bits]

    # Convert bits to characters
    bit_string = ''.join(map(str, flipped_bits))
    chars = []
    for i in range(0, len(bit_string), 8):
        byte = bit_string[i:i + 8]
        if len(byte) == 8:
            chars.append(chr(int(byte, 2)))

    # Print the characters
    result = ''.join(chars)
    print(result)

# Example usage
extract_lsb('DecaoVsDatg.png')
