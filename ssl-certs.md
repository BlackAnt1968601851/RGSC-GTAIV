# SSL/TLS Certificates

X.509 is an ITU standard defining the format of public key certificates. X.509 are used in TLS/SSL, which is the basis for HTTPS. An X.509 certificate binds an identity to a public key using a digital signature. A certificate contains an identity (hostname, organization, etc.) and a public key (RSA, DSA, ECDSA, ed25519, etc.), and is either signed by a Certificate Authority or is Self-Signed.

## Self-Signed Certificates

### Generate CA
1. Generate RSA
```bash
openssl genrsa -aes256 -out ca-key.pem 4096
```
2. Generate a public CA Cert
```bash
openssl req -new -x509 -sha256 -days 365 -key ca-key.pem -out ca.pem
```

### Generate Certificate
1. Create a RSA key
```bash
openssl genrsa -out cert-key.pem 4096
```
2. Create a Certificate Signing Request (CSR)
```bash
openssl req -new -sha256 -subj "/CN=yourcn" -key cert-key.pem -out cert.csr
```
3. Create a `extfile` with all the alternative names
```bash
echo "subjectAltName=DNS:www.rockstargames.com,DNS:mls.rockstargames.com,DNS:rockstargames.com,DNS:updates.rockstargames.com,DNS:tv.rockstargames.com,DNS:socialclub.rockstargames.com" >> extfile.cnf
```
```bash
# optional
echo extendedKeyUsage = serverAuth >> extfile.cnf
```
4. Create the certificate
```bash
openssl x509 -req -sha256 -days 365 -in cert.csr -CA ca.pem -CAkey ca-key.pem -out cert.pem -extfile extfile.cnf -CAcreateserial
```
5. Convert the certificate
```bash
openssl pkcs12 -inkey bob_key.pem -in bob_cert.cert -export -out bob_pfx.pfx
```
