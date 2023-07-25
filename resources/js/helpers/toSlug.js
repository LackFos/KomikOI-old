export default function(string) {
   return string
      .toLowerCase()
      .replace(/[^a-z0-9]+/g, '-') // Replace non-alphanumeric characters with hyphens
      .replace(/^-+|-+$/g, '') // Remove hyphens from the beginning and end
      .replace(/-+/g, '-'); // Replace consecutive hyphens with a single hyphen
}